<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Validator;
use Mail;
use App\Mail\SendMail;
class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $rules = [
                'company_name' => 'required',
                'company_phone' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'zip_code' => 'required',
                'country' => 'required',
                'acount_type' => 'required',
                'about' => 'required',
                'industry' => 'required',
                'type' =>   'required',
                'specialities' => 'required',
                'founded' => 'required'
            ];

            $validated = Validator::make($request->all(), $rules);
            if ($validated->fails()) {
                return response()->json(['status' => false, 'data' => [], 'error' => $validated->errors()]);
            }

            $user = new User;
            $user->company_name     = $request->company_name;
            $user->company_phone    = $request->company_phone;
            $user->email            = $request->email;
            $user->password         = Hash::make($request->password);
            $user->zip_code         = $request->zip_code;
            $user->country          = $request->country;
            $user->acount_type      = $request->acount_type;
            $user->about            = $request->about;
            $user->industry         = $request->industry;
            $user->type             = $request->type;
            $user->specialities     = $request->specialities;
            $user->founded          = $request->founded;

            $user->save();
            $token = $user->createToken('apiToken')->plainTextToken;


            return response()->json(['status' => true, 'data' => ['token' => $token, 'user' => new UserResource($user)], 'error' => []]);
        } catch (\Exception $e) {
            return response()->json(['status' => true, 'data' => [], 'error' => ['message' => $e->getMessage()]]);
        }
    }

    public function login(Request $request)
    {
        try {
            $rules = [
                'email' => 'required',
                'password' => 'required',

            ];

            $user = User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {

                return response([
                    'msg' => 'incorrect username or password'
                ], 401);
            }

            $token = $user->createToken('apiToken')->plainTextToken;


            return response()->json(['status' => true, 'data' => ['token' => $token, 'user' => $user], 'error' => []]);
        } catch (\Exception $e) {
            return response()->json(['status' => true, 'data' => [], 'error' => ['message' => $e->getMessage()]]);
        }
    }

    public function logout(Request $request)
    {

        auth('sanctum')->user()->tokens()->delete();

        return response()->json(['status' => true, 'data' => ['message' => 'Successfully logged out.'], 'error' => []]);
    }

    public function forgotPassword(Request $request){

        ///return response()->json(['status' => true, 'data' => ['message' => 'Successfully logged out.'], 'error' => []]);// $otp = rand(1000,9999);
        $otp = rand(1000,9999);
        $user = User::where('email','=',$request->email)->update(['otp' => $otp]);

        if($user){

            $testMailData = [
                'body' => 'This is the body of test email.'.$otp
            ];
            Mail::to($request->email)->send(new SendMail($testMailData));

            // dd('Success! Email has been sent successfully.');


            return response()->json(['status' => true, 'data' => ['message' => 'Successfully otp sent'], 'error' => []]);
        }
        else{
            return response(["status" => 401, 'message' => 'Invalid']);
        }

    }

    public function resetPassword(Request $request){
        try{
            //echo $request->email." ";

            //echo $request->opt;
            $password = Hash::make($request->password);

            $user = User::where([['email','=',$request->email],['otp','=',$request->otp]])
                ->update(['password' => $password,'otp' => '']);
            //print_r($user);
            if($user){
                return response()->json(['status' => true, 'data' => ['message' => 'Password reset successfully'], 'error' => []]);
            }else{
                return response()->json(['status' => true, 'data' => ['message' => 'Otp or email invalid'], 'error' => []]);
            }
        }catch (\Exception $e) {
            return response()->json(['status' => true, 'data' => [], 'error' => ['message' => $e->getMessage()]]);
        }
    }
}
