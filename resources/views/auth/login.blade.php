@extends('layouts.app')

@section('content')
    <body class=" login" style="background: center #ffff;">
    <!-- BEGIN : LOGIN PAGE 5-1 -->
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset mt-login-5-bsfix">
                <div class="login-bg" style="background-image:url(../assets/pages/img/login/bg1.jpg)">
                    <img class="login-logo" src="../assets/pages/img/login/logo.png"/></div>
            </div>
            <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
                <div class="login-content">
                    <h1 style="margin-bottom: -30px">{{ __('Login') }}</h1>
                    <form action="{{ route('login') }}" class="login-form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-xs-6">
                                <label for="email"
                                       class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
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
                            <div class="col-xs-6">
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
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
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="rem-password">
                                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                                        <input type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }} /> {{ __('Remember Me') }}
                                        <span></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-8 text-right">
                                <div class="forgot-password">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" id="forget-password"
                                           class="forget-password">{{ __('Forgot Your Password?') }}</a>
                                    @endif

                                </div>
                                <button class="btn" type="submit"
                                        style="background-color: #32c5d2; border-color: #32c5d2; color: #fff;">{{ __('Login') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
