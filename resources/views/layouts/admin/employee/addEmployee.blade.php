@extends('layouts.app')

@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
    <div class="page-container">
    @include('includes.memuAdmin')
    <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper" style="
    margin-top: -36px;
">

            <div class="page-content">
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="{{url('/home')}}">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Employee</span>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Add Employee</span>
                        </li>
                    </ul>
                </div>
    <div class="page-container">

            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">


                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->

                <div class="tab-pane" id="tab_2" style="
    margin-left: -209px;
">
                    <div class="portlet box green" style="
    margin-top: -60px;
">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>New Employee
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form action="{{route('addEmployee')}}" method="post" class="form-horizontal">
                                @csrf
                                <div class="form-body" style="padding: 0px">
                                    <div class="form-group">
                                        @if($errors->any())
                                            <h4 class="col-md-3 control-label"
                                                style="color: green;">{{$errors->first()}}</h4>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">First_name</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <input type="text" name="first_name" class="form-control"
                                                       placeholder="first_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Last_name</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <input type="text" name="last_name" class="form-control"
                                                       placeholder="last_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <input type="email" name="email" class="form-control"
                                                       placeholder="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <input type="password" name="password" class="form-control"
                                                       placeholder="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Phone_number</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <input type="tel" name="phone_number" class="form-control"
                                                       placeholder="phone_number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Hire_date</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <input type="date" name="hire_date" class="form-control"
                                                       placeholder="hire_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Salary</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <input type="number" name="salary" class="form-control"
                                                       placeholder="salary">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Photo</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <input type="file" name="photo" class="form-control"
                                                       placeholder="photo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Department</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <select name="department_id" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($departments as $department)
                                                        <option
                                                            value="{{ $department->id }}">{{ $department->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Job</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <select name="job_id" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($jobs as $job)
                                                        <option value="{{ $job->id }}">{{ $job->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Manager</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <select name="manager_id" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($employees as $employee)
                                                        <option
                                                            value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                    <div class="form-group">--}}
                                    {{--                                        <label class="col-md-3 control-label">Full Name</label>--}}
                                    {{--                                        <div class="col-md-4">--}}
                                    {{--                                            <div class="input-group">--}}
                                    {{--                                            <span class="input-group-addon">--}}
                                    {{--                                                <i class="fa fa-sticky-note"></i>--}}
                                    {{--                                            </span>--}}
                                    {{--                                                <select name="employee_id" class="form-control">--}}
                                    {{--                                                    @foreach ($employees as $employee)--}}
                                    {{--                                                        <option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>--}}
                                    {{--                                                    @endforeach--}}
                                    {{--                                                </select>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}

                                    <div class="form-actions fluid">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
