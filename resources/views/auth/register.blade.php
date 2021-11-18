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
                <div class="login-content" style="margin-top: 10%;">
                    <h1 style="margin-bottom: -30px">{{ __('Register') }}</h1>
                    <form action="{{ route('register') }}" class="login-form" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-xs-6" style="margin-left: -17px;">
                                <label for="first_name"
                                       class=" col-form-label text-md-right">{{ __('first_name') }}</label>
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
                            <div class="row">
                            <div class="col-xs-6">
                                <label for="last_name"
                                       class=" col-form-label text-md-right">{{ __('last_name') }}</label>
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


                            <div class="col-xs-6">
                                <label for="phone_number" class="col-form-label text-md-right">{{ __('phone_number') }}</label>
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
                            <div class="col-xs-6">
                                <label for="hire_date" class="col-form-label text-md-right">{{ __('hire_date') }}</label>
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
                            <div class="col-xs-6">
                                <label for="salary" class="col-form-label text-md-right">{{ __('salary') }}</label>
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
                            <div class="col-xs-6">
                                <label for="photo" class="col-form-label text-md-right">{{ __('photo') }}</label>
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
                                <div class="col-xs-6">
                                <label for="job_id" class="col-form-label text-md-right">{{ __('job_id') }}</label>
                                <input id="job_id"
                                       class="form-control form-control-solid placeholder-no-fix form-group @error('job_id') is-invalid @enderror"
                                       type="number" placeholder="job_id"
                                       name="job_id"  value="{{ old('job_id') }}"/>

{{--                                    <select name="job_id" class="form-control">--}}

{{--                                        @foreach ($jobs as $job)--}}
{{--                                            <option value="{{ $job->id }}">{{ $job->name }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
                                @error('job_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="col-xs-6">
                                    <label for="department_id" class="col-form-label text-md-right">{{ __('department_id') }}</label>
{{--                                    <input id="department_id"--}}
{{--                                           class="form-control form-control-solid placeholder-no-fix form-group @error('department_id') is-invalid @enderror"--}}
{{--                                           type="number" placeholder="department_id"--}}
{{--                                           name="department_id"  value="{{ old('department_id') }}" autocomplete="department_id"/>--}}
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




                        <button class="btn" type="submit"
                                style="background-color: #32c5d2; border-color: #32c5d2; color: #fff;">
                            {{ __('Register') }}</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
