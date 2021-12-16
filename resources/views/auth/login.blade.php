@extends('admin.layouts.app')


@section('content')

    <body class=" login">
    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="{{'/login'}}">
            <img src="../assets/pages/img/logo-big.png" alt=""/> </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="{{ route('login') }}" method="post">
            @csrf
            <h3 class="form-title font-green">{{ __('Login') }}</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> Enter any username and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9" for="email">{{ __('E-Mail Address') }}</label>
                <input id="email"
                       class="form-control form-control-solid placeholder-no-fix form-group @error('email') is-invalid @enderror"
                       type="email" placeholder="Email"
                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
                <input id="password"
                       class="form-control form-control-solid placeholder-no-fix form-group @error('password') is-invalid @enderror"
                       type="password" placeholder="Password"
                       name="password" required autocomplete="current-password"/>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-actions">
                <div class="forgot-password">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" id="forget-password"
                           class="forget-password">{{ __('Forgot Your Password?') }}</a>
                    @endif

                </div>
                <button type="submit" class="btn green uppercase">{{ __('Login') }}</button>
                <div class="rem-password">
                    <label class="rememberme check mt-checkbox mt-checkbox-outline" style=" margin-top: 20px">
                        <input type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }} /> {{ __('Remember Me') }}
                        <span></span>
                    </label>
                </div>
            </div>
            <div class="create-account">
                <p>
                    <a href="{{url('/register')}}" id="register-btn" class="uppercase">Create an account</a>
                </p>
            </div>
        </form>
        <!-- END LOGIN FORM -->

    </div>

    </body>

@endsection
