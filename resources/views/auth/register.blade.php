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
        <form class="login-form" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h3 class="form-title font-green">{{ __('Register') }}</h3>
            <div class="form-group">
                <label class="control-label " for="username" >{{ __('Full Name') }}</label>
                <input id="username"
                       class="form-control form-control-solid placeholder-no-fix form-group  @error('username') is-invalid @enderror"
                       type="text" placeholder="full name"
                       name="username" value="{{ old('username') }}" required autocomplete="username" autofocus/>
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label " for="email" >{{ __('E-Mail Address') }}</label>
                <input id="email"
                       class="form-control form-control-solid placeholder-no-fix form-group  @error('email') is-invalid @enderror"
                       type="email" placeholder="email"
                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" class="control-label " >{{ __('Password') }}</label>
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
            <div class="form-group">
                <label for="photo" class="control-label " >{{ __('Photo') }}</label>
                <input id="photo"
                       class="form-control form-control-solid placeholder-no-fix form-group @error('photo') is-invalid @enderror"
                       type="file" placeholder="photo"
                       name="photo" accept="image/png, image/jpeg" value="{{ old('photo') }}" autocomplete="photo"/>
                @error('photo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="btn green uppercase">{{ __('register') }}</button>
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
                    <a href="{{url('/login')}}" id="register-btn" class="uppercase">Already have an account</a>
                </p>
            </div>
        </form>
        <!-- END LOGIN FORM -->
    </div>
    </body>

@endsection
