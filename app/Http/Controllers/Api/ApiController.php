<?php

namespace App\Http\Controllers\Api;

use App\{
  Http\Controllers\Controller,
  Http\Resources\UserResource
};

use App\{
  Models\User,
};

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Str;
use JWTAuth;
use App\Classes\GeniusMailer;

use Kutia\Larafirebase\Facades\Larafirebase;


class ApiController extends Controller
{
  public function testnot(){
    $n_title = 'Test Title';
    $n_body = 'Test Body';

    $notification = ['title' => $n_title, 'body' => $n_body];
    $this->sendNotification(request()->merge($notification));
    return;
  }

  public function register(Request $request)
  {
    try{
      $rules = [
          'fullname' => 'required',
          'email' => 'required|email|unique:users',
          'city' => 'required',
          'phone' => 'required',
          'password' => 'required|confirmed|min:6',
          'password_confirmation' => 'required|min:6'
      ];

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
        return response()->json(['status' => false, 'data' => [], 'error' => $validator->errors()]);
      }


      $user = new User;
      $user->name = $request->fullname;
      $user->email = $request->email;
      $user->city = $request->city;
      $user->phone = $request->phone;
      $user->password = bcrypt($request->password);
      $user->email_verified = 'Yes';

      // ===== EMAIL AFTER ACTION ==========

      $to = "admin@admin.com";
      $subject = 'New User Registered';
      $msg = nl2br("New User Registered\nName: ".$request->fullname."\nEmail: ".$request->email."\nPhone: ".$request->phone."");
      //Sending Email To Customer
      if($gs->is_smtp == 1)
      {
        $data = [
            'to' => $to,
            'subject' => $subject,
            'body' => $msg,
        ];

        $mailer = new GeniusMailer();
        $mailer->sendCustomMail($data);
      }
      else
      {
        $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
        mail($to,$subject,$msg,$headers);
      }
        // ===== EMAIL AFTER ACTION ENDS =======

      $user->save();

      $token = auth()->login($user);

      // $this->sendNotification(['title' => 'Test Title', 'body' => 'Test Body']);
      // $this->sendNotification()->response()->json( ['title' => 'Test Title', 'body' => 'Test Body']);

      return response()->json(['status' => true, 'data' => ['token' => $token, 'user' => new UserResource($user)], 'error' => []]);
    }
    catch(\Exception $e){
      return response()->json(['status' => true, 'data' => [], 'error' => ['message' => $e->getMessage()]]);
    }
  }


  /**
   * Get a JWT via given credentials.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function login(Request $request)
  {
    try{
      $rules = [
          'email' => 'required',
          'password' => 'required',
          'device_token' => 'required'
      ];

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
        return response()->json(['status' => false, 'data' => [], 'error' => $validator->errors()]);
      }

      $credentials = request(['email', 'password']);

      if (! $token = auth()->attempt($credentials)) {
        return response()->json(['status' => false, 'data' => [], 'error' => ["message" => "Email / password didn't match."]]);
      }

      if(auth()->user()->email_verified == 'No')
      {
        auth()->logout();
        return response()->json(['status' => false, 'data' => [], 'error' => ["message" => 'Your Email is not Verified!']]);
      }

      if(auth()->user()->ban == 1)
      {
        auth()->logout();
        return response()->json(['status' => false, 'data' => [], 'error' => ["message" => 'Your Account Has Been Banned.']]);
      }

      $user = User::findorfail(auth()->user()->id);
      $user->device_token = $request->device_token;
      $user->save();

      return response()->json(['status' => true, 'data' => ['token' => $token, 'user' => new UserResource(auth()->user())], 'error' => []]);
    }
    catch(\Exception $e){
      return response()->json(['status' => true, 'data' => [], 'error' => ['message' => $e->getMessage()]]);
    }
  }

  /**
   * Get a JWT via given credentials.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function social_login(Request $request)
  {
    try{
      $rules = [
          'name' => 'required',
          'email' => 'required'
      ];

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
        return response()->json(['status' => false, 'data' => [], 'error' => $validator->errors()]);
      }

      $user = User::where('email','=',$request->email)->first();

      if(!$user){

                  $rules = [
                      'email' => 'email|unique:users'
                  ];

                  $validator = Validator::make($request->all(), $rules);
                  if ($validator->fails()) {
                    return response()->json(['status' => false, 'data' => [], 'error' => $validator->errors()]);
                  }

                 $user = new User;
                 $user->name = $request->name;
                 $user->email = $request->email;
                 $user->email_verified = 'Yes';
                 $user->affilate_code = md5($request->email);
                 $user->save();

                 $token = auth()->login($user);
                 return response()->json(['status' => true, 'data' => ['token' => $token], 'error' => []]);

      }

      $userToken = JWTAuth::fromUser($user);

      if($user->email_verified == 'No')
      {
        return response()->json(['status' => false, 'data' => [], 'error' => ["message" => 'Your Email is not Verified!']]);
      }

      if($user->ban == 1)
      {
        return response()->json(['status' => false, 'data' => [], 'error' => ["message" => 'Your Account Has Been Banned.']]);
      }

      auth()->login($user);

      return response()->json(['status' => true, 'data' => ['token' => $userToken,  'user' => new UserResource(auth()->user())], 'error' => []]);

    }
    catch(\Exception $e){
      return response()->json(['status' => true, 'data' => [], 'error' => ['message' => $e->getMessage()]]);
    }
  }


  /**
   * Get the authenticated User.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function details()
  {
    try{
      return response()->json(['status' => true, 'data' => new UserResource(auth()->user()), 'error' => []]);
    }
    catch(\Exception $e){
      return response()->json(['status' => true, 'data' => [], 'error' => ['message' => $e->getMessage()]]);
    }
  }

  /**
   * Log the user out (Invalidate the token).
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function logout()
  {
      auth()->logout();
      return response()->json(['status' => true, 'data' => ['message' => 'Successfully logged out.'], 'error' => []]);
  }

  /**
   * Refresh a token.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function refresh()
  {
      return $this->respondWithToken(auth()->refresh());
  }

  /**
   * Get the token array structure.
   *
   * @param  string $token
   *
   * @return \Illuminate\Http\JsonResponse
   */
  protected function respondWithToken($token)
  {
      return response()->json([
          'access_token' => $token,
          'token_type' => 'bearer',
          'expires_in' => auth()->factory()->getTTL() * 300
      ]);
  }

 public function forgot(Request $request){

     $user = User::where('email',$request->email)->first();
     if($user)
     {

      $token = Str::random(6);

      $subject = "Reset Password Request";
      $msg = "Your Forgot Password Token: ".$token;
      $user->reset_token = $token;
      $user->update();

      $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
      mail($request->email,$subject,$msg,$headers);

      return response()->json(['status' => true, 'data' => ['user_id' => $user->id,'reset_token' => $user->reset_token], 'error' => []]);

     }
     else
     {
          return response()->json(['status' => false, 'data' => [], 'error' => 'Account not found']);
     }

  }


  public function forgot_submit(Request $request){

      if($request->new_password != $request->confirm_password)
      {
          return response()->json(['status' => false, 'data' => [], 'error' => 'New password & confirm password not match']);
      }

      $user = User::where('id',$request->user_id)->where('reset_token',$request->reset_token)->first();
      if($user)
      {

         $password = Hash::make($request->new_password);
         $user->password = $password;
         $user->reset_token = null;
         $user->update();
         return response()->json(['status' => true, 'data' => ['message' => 'Password Changed Successfully'], 'error' => []]);

      }else{
          return response()->json(['status' => false, 'data' => [], 'error' => 'Something is wrong']);
      }
  }


  public function sendNotification(Request $request)
  {

      $rules =
      [
          'title'=>'required',
          'body'=>'required'
      ];
      $validator = Validator::make($request->all(), $rules);

      if ($validator->fails()) {
        return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
      }

      try{

        $userid = auth()->user()->id;
        $device_tokens = User::where('id', '=', $userid)->select('device_token')->get();
        $device_token = $device_tokens[0]['device_token'];
        // $test_device_token = 'fOGlCIjDQGAxLcYKyb3W5g:APA91bHkkZ5BZ3eEnQpjNCxV7fq66Rm6aGh1mLUijRfCJ6jqGtydoIHl2KCmE21VF6mrRjXJ9MpaVTMFLIdq6x5RQsZ3pLCI_3jAlG5qwhr4UPT96xWfwPoM7_QvGyUE91Y0uD45KS0J';
        $test_device_token= 'fOGlCIjDQGAxLcYKyb3W5g:APA91bF8ipDjrbGUHkkdjyCAGnVHgw_O_RJ_iyeGrjvZLe0SFtkBndZUxPsQ2nArICorV6jpU_wMB9BBht13FWqBfcwlHRJxwzETH1dMyKE1MYc-yFx2F_OEfccnZOK34OXLbbyivd6S';
          $title = $request->title;
          $body = $request->body;


          Larafirebase::withTitle($title)
              ->withBody($body)
              ->sendMessage($test_device_token);

         return response()->json(['status' => true, 'data' => ['message' => 'Successful', 'token' => $test_device_token], 'error' => []]);


      }catch(\Exception $e){
         return response()->json(['status' => true, 'data' => ['message' => 'Error'], 'error' => []]);
      }
  }

}
