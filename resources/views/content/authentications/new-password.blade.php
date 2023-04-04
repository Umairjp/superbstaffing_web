@extends('layouts/main')

@section('content')
    <section class="login-pg" style="background-image:url({{ asset('front/assets/images/login-bg.png') }});">
        <div class="login-header">
            <div class="logo">
                <img src="{{ asset('front/assets/images/logo.png') }}" alt="">
            </div>
            <div class="sign-up">
                <form class="" action="" autocomplete="off">
            </div>
        </div>

        <div class="formwrap">

            <div class="login-form reset-password">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <h1 class="heading text-center">Reset Password</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing</p>
                            <div class="form-group">
                                <input type="password" id="password-field" placeholder="New Password" class="form-control"
                                    autocomplete="off" required>
                                <i toggle="#password-field"
                                    class="icon-Icon-material-remove-red-eye field-icon toggle-password"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" id="password-field" placeholder="Confirm Password"
                                    class="form-control" autocomplete="off" required>
                                <i toggle="#password-field"
                                    class="icon-Icon-material-remove-red-eye field-icon toggle-password"></i>
                            </div>
                            <button class="btn btn-secondary w-100 form-login-btn" type="submit">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
