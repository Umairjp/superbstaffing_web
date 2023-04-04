@extends('layouts/main')

@section('content')
    <section class="login-pg" style="background-image:url({{ asset('assets/images/login-bg.png') }});">
        <div class="login-header">
            <div class="logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="">
            </div>

        </div>
        <div class="formwrap">
            <div class="login-form otp-form">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="digit-group" action="" method="get" class="digit-group"
                                data-group-name="digits" data-autosubmit="false" autocomplete="off">
                                <h1 class="heading text-center">Enter OTP</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing</p>
                                <div class="form-group mb-30">
                                    <input type="text" class="otp-input" id="digit-1" name="digit-1"
                                        data-next="digit-2" autofocus />
                                    <input type="text" class="otp-input" id="digit-2" name="digit-2"
                                        data-next="digit-3" data-previous="digit-1" />
                                    <input type="text" class="otp-input" id="digit-3" name="digit-3"
                                        data-next="digit-4" data-previous="digit-2" />
                                    <input type="text" class="otp-input" id="digit-4" name="digit-4"
                                        data-next="digit-5" data-previous="digit-3" />
                                    <input type="text" class="otp-input" id="digit-5" name="digit-5"
                                        data-next="digit-6" data-previous="digit-4" />
                                    <input type="text" class="otp-input" id="digit-6" name="digit-6"
                                        data-next="digit-7" data-previous="digit-5" />
                                </div>
                                <button class="btn btn-secondary otp-btn" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
