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
                <label class="control-label " for="first_name" >{{ __('First Name') }}</label>
                <input id="first_name"
                       class="form-control form-control-solid placeholder-no-fix form-group  @error('first_name') is-invalid @enderror"
                       type="text" placeholder="first_name"
                       name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus/>
                @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label " for="last_name" >{{ __('Last Name') }}</label>
                <input id="last_name"
                       class="form-control form-control-solid placeholder-no-fix form-group  @error('last_name') is-invalid @enderror"
                       type="text" placeholder="last_name"
                       name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus/>
                @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label " for="email" >{{ __('E-Mail Address') }}</label>
                <input id="email"
                       class="form-control form-control-solid placeholder-no-fix form-group  @error('email') is-invalid @enderror"
                       type="text" placeholder="email"
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
                <label for="phone_number" class="control-label " >{{ __('Phone Number') }}</label>
                <input id="phone_number"
                       class="form-control form-control-solid placeholder-no-fix form-group @error('phone_number') is-invalid @enderror"
                       type="tel" placeholder="phone_number"
                       name="phone_number" required autocomplete="phone_number"/>
                @error('phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="hire_date" class="control-label " >{{ __('Hire Date') }}</label>
                <input id="hire_date"
                       class="form-control form-control-solid placeholder-no-fix form-group @error('hire_date') is-invalid @enderror"
                       type="date" placeholder="hire_date"
                       name="hire_date" required autocomplete="hire_date"/>
                @error('hire_date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="salary" class="control-label " >{{ __('Salary') }}</label>
                <input id="salary"
                       class="form-control form-control-solid placeholder-no-fix form-group @error('salary') is-invalid @enderror"
                       type="number" placeholder="salary"
                       name="salary" required autocomplete="salary"/>
                @error('salary')
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
            <div class="form-group">
                <label for="job_id" class="control-label " >{{ __('Job') }}</label>
                <select name="job_id" class="form-control">
                    @foreach ($jobs as $job)
                        <option value="{{ $job->id }}">{{ $job->title }}</option>
                    @endforeach
                </select>
                @error('job_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="department_id" class="control-label " >{{ __('Department') }}</label>
                <select name="department_id" class="form-control">
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
                @error('department_id')
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
