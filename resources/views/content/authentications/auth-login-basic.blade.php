{{-- @extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection --}}

@extends('layouts/main')

@section('css')
@endsection

@section('content')
    <section class="login-pg" style="background-image:url({{ asset('front/assets/images/login-bg.png') }});">
        <div class="login-header">
            <div class="logo">
                <img src="{{ asset('front/assets/images/logo.png') }}" alt="">
            </div>
            <div class="sign-up">
                <div class="have-account">
                    <p>Don’t have an account? </p>
                    <a href="{{ url('auth/register-basic') }}" class="btn btn-secondary">Signup</a>
                </div>
            </div>
        </div>

        <div class="formwrap">
            <div class="login-form">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <h1 class="heading text-center">Welcome Back!</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing</p>
                            <form id="formAuthentication" action="{{ route('LoginProcess') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" placeholder="Email" id="email" name="email"
                                        class="form-control" autocomplete="off" required>
                                    <i class="icon-Icon-material-email field-icon"></i>
                                    @error('email')
                                        <br />
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password-field" name="password" placeholder="Password"
                                        class="form-control" autocomplete="off" required>
                                    <i toggle="#password-field"
                                        class="icon-Icon-material-remove-red-eye field-icon toggle-password"></i>
                                    @error('password')
                                        <br />
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="my-lg-30 text-center forgot-pass">
                                    <div class="remember-checkbox">
                                        <input type="checkbox" name="remember_me" id="remember_me">
                                        <p>Remember Me</p>
                                    </div>
                                    <a href="{{ url('auth/forgot-password-basic') }}" class="anchor-primary">Forgot
                                        Password?</a>
                                </div>
                                <button class="btn btn-secondary w-100 form-login-btn" type="submit">Login</button>
                                <p class="login-with">Or Login With</p>
                                <div class="other-login">
                                    <a class="btn btn-fb" href="#"><i class="icon-Icon-awesome-facebook-f"></i></a>
                                    <a class="btn btn-google" href="#"><i class="icon-Icon-awesome-google"></i></a>
                                    <a class="btn btn-apple" href="#"><i class="icon-Icon-awesome-apple"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="{{ url('/') }}" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">@include('_partials.macros', ['width' => 25, 'withbg' => '#696cff'])</span>
                                <span
                                    class="app-brand-text demo text-body fw-bolder">{{ config('variables.templateName') }}</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Welcome to {{ config('variables.templateName') }}! 👋</h4>
                        <p class="mb-4">Please sign-in to your account and start the adventure</p>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br> --}}
    {{-- <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul> --}}
    {{-- </div>
                        @endif
                        <form id="formAuthentication" class="mb-3" action="{{ route('LoginProcess') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email or username" autofocus>
                                @error('email')
                                    <br />
                                    <span class="alert alert-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                    <a href="{{ url('auth/forgot-password-basic') }}">
                                        <small>Forgot Password?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                @error('password')
                                    <br />
                                    <span class="alert alert-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me">
                                    <label class="form-check-label" for="remember-me">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('login.google') }}" class="btn btn-danger d-grid w-100">Login with
                                    Google</a>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('login.facebook') }}" class="btn btn-primary d-grid w-100">Login with
                                    Facebook</a>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="{{ url('auth/register-basic') }}">
                                <span>Create an account</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div> --}}
@endsection
