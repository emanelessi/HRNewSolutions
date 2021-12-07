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
                            <span>Job</span>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Edit Job History</span>
                        </li>
                    </ul>
                </div>
                <div class="page-container">
                    <div class="page-fixed-main-content">
                        <div class="profile">
                            <div class="tabbable-line tabbable-full-width">
                                <ul class="nav nav-tabs" style="
    margin-top: -52px;
">
                                    <li class="active">
                                        <a href="#tab_1_1" data-toggle="tab"> Edit Job </a>
                                    </li>
                                </ul>
                                <div class="portlet-body form" id="tab_1_1">
                                    <form action="{{route('editHistory')}}" method="post" class="form-horizontal">
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
                                                    <input type="datetime-local" value="{{$job_history['start_date']}}"
                                                           name="start_date" class="form-control"
                                                           placeholder="Start Date">
                                                    <input type="hidden" name="id" class="form-control"
                                                           value="{{$job_history['id']}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">End Date</label>
                                                <div class="col-md-4">
                                                    <input type="datetime-local" value="{{$job_history['end_date']}}"
                                                           name="end_date" class="form-control"
                                                           placeholder="End Date">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Employee</label>
                                                <div class="col-md-4">
                                                    <select name="employee_id" class="form-control">
                                                        @foreach($employess as $employes)
                                                            <option
                                                                value="{{ $employes->id }}">{{ $employes->first_name }} {{ $employes->last_name }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Job</label>
                                                <div class="col-md-4">
                                                    <select name="job_id" class="form-control">
                                                        @foreach($jobs as $job)
                                                            <option
                                                                value="{{ $job->id }}">{{ $job->title }} </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Department</label>
                                                <div class="col-md-4">
                                                    <select name="department_id" class="form-control">
                                                        @foreach($departments as $department)
                                                            <option
                                                                value="{{ $department->id }}">{{ $department->name }} </option>
                                                        @endforeach
                                                    </select>
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
        </div>
    </div>
    <div class="page-footer">
        <div class="page-footer-inner">2021 &copy; NewSolutions
        </div>
    </div>
    </body>
@endsection
