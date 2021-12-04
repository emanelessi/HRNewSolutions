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
                            <span>Job History</span>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Add Job History</span>
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
                                        <i class="fa fa-gift"></i>New Job History
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form action="{{route('addHistory')}}" method="post" class="form-horizontal">
                                        @csrf
                                        <div class="form-body" style="padding: 0px">
                                            <div class="form-group">
                                                @if($errors->any())
                                                    <h4 class="col-md-3 control-label"
                                                        style="color: green;">{{$errors->first()}}</h4>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Start Date</label>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                        <input type="datetime-local"
                                                               name="start_date" class="form-control"
                                                               placeholder="Start Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">End Date</label>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                        <input type="datetime-local"
                                                               name="end_date" class="form-control"
                                                               placeholder="End Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Employee Name</label>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>

                                                        <select name="employee_id" class="form-control">
                                                            <option value="">-- Select One --</option>
                                                            @foreach ($Employees as $Employee)
                                                                <option
                                                                    value="{{ $Employee->id }}">{{ $Employee->first_name }} {{ $Employee->last_name }}</option>
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
                                                        <select name="employee_id" class="form-control">
                                                            <option value="">-- Select One --</option>
                                                            @foreach ($jobs as $job)
                                                                <option
                                                                    value="{{ $job->id }}">{{ $job->title }} </option>
                                                            @endforeach
                                                        </select>
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

                                                        <select name="employee_id" class="form-control">
                                                            <option value="">-- Select One --</option>
                                                            @foreach ($departments as $department)
                                                                <option
                                                                    value="{{ $department->id }}">{{ $department->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
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
