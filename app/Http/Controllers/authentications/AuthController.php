<?php

namespace App\Http\Controllers\authentications;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\{FormDataRequest};
use App\Models\User;
use Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function __construct()
  {
    // $this->middleware('guest')->except('logout');
  }

  function RegisterProcess(FormDataRequest $request)
  {
    try {
      //dd($request->all());
      $validated = $request->validated();
      // $validated = $request->safe()->only(['username', 'email']);
      // $validated = $request->safe()->except(['username', 'email']);

      $user = User::create([
       'company_name' => $validated['companyName'],
       'company_phone' => $validated['companyPhone'],
       'email' => $validated['email'],
       'password' => Hash::make($validated['password']),
       'zip_code' => $validated['zipCode'],
       'country' => $validated['country'],
       'acount_type' => '2',
       'about' => $validated['about'],
       'industry' => $validated['industry'],
       'type' => $validated['type'],
       'specialites' => $validated['specialist'],
       'founded' => $validated['founded'],
      ]);
      event(new Registered($user));
      Auth::loginUsingId($user->id, true);
      return redirect()->route('admin.dashboard');
      //->withSuccess('Great! You have Successfully loggedin');


    } catch (\Exception $e) {
      dd($e->getMessage());
      return redirect()->back()->with('error', $e->getMessage());
    }
  }

  function LoginProcess(Request $request)
  {
    // dd($request->all());
    $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {

      $request->session()->regenerate();

      if(Auth()->user()->acount_type=='2'){
        return redirect()->route('agency.dashboard');
      }else{
        return redirect()->route('admin.dashboard');
        //return redirect()->route('company.dashboard');
      }

    }

    return back()->withErrors([
      'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
  }

  //Google Login
  public function redirectToGoogle()
  {
    return Socialite::driver('google')->redirect();
  }

  //Google callback
  // public function handleGoogleCallback(){
  //   $user = Socialite::driver('google')->stateless()->user();
  //   $this->_registerorLoginUser($user);
  //   return redirect()->route('home');
  // }
  public function handleGoogleCallback()
  {
    try {

      $SoicalID = Socialite::driver('google')->user();

      $user_obj_count = User::where('user_social_token', $SoicalID->id)->first();
      // dd($user_obj_count);
      if (!empty($user_obj_count)) {
        if ($SoicalID->email) {
          $update_email = User::where('user_social_token', $user_obj_count->user_social_token)->update(['email' => $SoicalID->email]);
        }
        if ($SoicalID->name) {
          $update_name = User::where('user_social_token', $user_obj_count->user_social_token)->update(['name' => $SoicalID->name]);
        }
        Auth::login($user_obj_count);
        return redirect('/');
      } else {
        $createUser = User::create([
          'name' => $SoicalID->name,
          'email' => $SoicalID->email,
          'user_social_token' => $SoicalID->id,
          'user_social_type' => 'google',
          'password' => ''
        ]);

        Auth::login($createUser);
        return redirect('/');
      }
    } catch (Exception $e) {
      dd($e->getMessage());
    }
  }

  //Facebook Login
  public function redirectToFacebook()
  {
    return Socialite::driver('facebook')->redirect();
  }

  //facebook callback
  // public function handleFacebookCallback(){
  //   $user = Socialite::driver('facebook')->stateless()->user();
  //   $this->_registerorLoginUser($user);
  //   return redirect()->route('home');
  // }
  public function handleFacebookCallback()
  {
    try {

      $SoicalID = Socialite::driver('facebook')->user();

      $user_obj_count = User::where('user_social_token', $SoicalID->id)->first();
      if ($user_obj_count > 0) {
        if ($SoicalID->email) {
          $update_email = User::where('user_social_token', $user_obj_count->user_social_token)->update(['email' => $SoicalID->email]);
        }
        if ($SoicalID->name) {
          $update_name = User::where('user_social_token', $user_obj_count->user_social_token)->update(['name' => $SoicalID->name]);
        }
        Auth::login($user_obj_count);
        return redirect('/website');
      } else {
        $createUser = User::create([
          'name' => $SoicalID->name,
          'email' => $SoicalID->email,
          'user_social_token' => $SoicalID->id,
          'user_social_type' => 'facebook',
          'password' => ''
        ]);

        Auth::login($createUser);
        return redirect('/');
      }
    } catch (Exception $e) {
      dd($e->getMessage());
    }
  }
  public function logout()
  {
    Auth::logout();
    return redirect()->route('auth-login-basic');
  }
}
