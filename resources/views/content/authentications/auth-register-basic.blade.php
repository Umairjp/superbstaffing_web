@extends('layouts/blankLayout')

@section('title', 'Register Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection


@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">

      <!-- Register Card -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="#" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'#696cff'])</span>
              <span class="app-brand-text demo text-body fw-bolder">{{config('variables.templateName')}}</span>
            </a>
          </div>
          <!-- /Logo -->
          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
            </div>
          @endif
          <form id="formAuthentication" class="mb-3" action="{{route('RegisterProcess')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Company Name</label>
              <input type="text" class="form-control" id="companyName" name="companyName" value="{{ old('companyName') }}" placeholder="Enter your Company Name" autofocus>
              @error("companyName")
                <br />
               <span class="alert alert-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Company phone</label>
              <input type="text" class="form-control" id="companyPhone" name="companyPhone" value="{{ old('companyPhone') }}" placeholder="Enter your Company Phone" autofocus>
              @error("companyPhone")
                <br />
               <span class="alert alert-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                @error("email")
                  <br />
                  <span class="alert alert-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">Password</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              @error("password")
                  <br />
                  <span class="alert alert-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Zip Code</label>
              <input type="text" class="form-control" id="zipCode" name="zipCode" value="{{ old('zipCode') }}" placeholder="Enter your Zip Code" autofocus>
              @error("zipCode")
                <br />
               <span class="alert alert-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Country</label>
              <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}" placeholder="Enter your country" autofocus>
              @error("zipCode")
                <br />
               <span class="alert alert-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="about" class="form-label">About</label>
              <input type="text" class="form-control" id="about" name="about" value="{{ old('about') }}" placeholder="Enter your about" autofocus>
              @error("about")
                <br />
               <span class="alert alert-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="industry" class="form-label">Industry</label>
              <input type="text" class="form-control" id="industry" name="industry" value="{{ old('industry') }}" placeholder="Enter your industry" autofocus>
              @error("industry")
                <br />
               <span class="alert alert-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}" placeholder="Enter your type" autofocus>
              @error("type")
                <br />
               <span class="alert alert-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="founded" class="form-label">Founded</label>
              <input type="text" class="form-control" id="founded" name="founded" value="{{ old('founded') }}" placeholder="Enter your founded" autofocus>
              @error("founded")
                <br />
               <span class="alert alert-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="specialist" class="form-label">Specialist</label>
              <input type="text" class="form-control" id="specialist" name="specialist" value="{{ old('specialist') }}" placeholder="Enter your specialist" autofocus>
              @error("specialist")
                <br />
               <span class="alert alert-danger">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                <label class="form-check-label" for="terms-conditions">
                  I agree to
                  <a href="javascript:void(0);">privacy policy & terms</a>
                </label>
              </div>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100">
                Sign up
              </button>
            </div>
            <div class="mb-3">
              <a href="{{route('login.google')}}" class="btn btn-danger d-grid w-100">Login with Google</a>
            </div>
            <div class="mb-3">
              <a href="{{route('login.facebook')}}" class="btn btn-primary d-grid w-100">Login with Facebook</a>
            </div>

          </form>

          <p class="text-center">
            <span>Already have an account?</span>
            <a href="{{url('auth/login-basic')}}">
              <span>Sign in instead</span>
            </a>
          </p>
        </div>
      </div>
    </div>
    <!-- Register Card -->
  </div>
</div>
</div>
@endsection
