@extends('layouts/main')

@section('content')
    <section class="login-pg" style="background-image:url({{ asset('front/assets/images/login-bg.png') }});">
        <div class="login-header">
            <div class="logo">
                <img src="{{ asset('front/assets/images/logo.png') }}" alt="">
            </div>
            <div class="sign-up">
                <div class="have-account">
                    <p>Already have an account? </p>
                    <a href="{{ url('/') }}" class="btn btn-secondary">Login</a>
                </div>
                <form class="" action="" autocomplete="off">
            </div>
        </div>
        <div class="formwrap">
            <div class="login-form">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <h1 class="heading text-center">Create An Account</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing</p>
                            <div class="form-group">
                                <input type="text" placeholder="Company Name" class="form-control" required>
                                <i class="icon-Icon-awesome-user-alt field-icon"></i>
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control" autocomplete="off" required>
                                <i class="icon-Icon-material-email field-icon"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" id="password-field" placeholder="Password" class="form-control"
                                    autocomplete="off" required>
                                <i toggle="#password-field"
                                    class="icon-Icon-awesome-user-alt field-icon toggle-password"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" id="password-field" placeholder="Password" class="form-control"
                                    autocomplete="off" required>
                                <i toggle="#password-field"
                                    class="icon-Icon-awesome-user-alt field-icon toggle-password"></i>
                            </div>
                            <div class="my-lg-30 text-center forgot-pass">
                                <div class="sign-up-checkbox">
                                    <input class="w-20 h-20" type="checkbox" name="remember_me" id="policy">
                                    <p>I have read, and I accept, Terms and Conditions and Privacy Policy.</p>
                                </div>
                            </div>
                            <button class="btn btn-secondary w-100 form-login-btn" type="submit">Signup</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
