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
                            <span>Holiday</span>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Edit Holiday</span>
                        </li>
                    </ul>
                </div>
                <div class="page-container">
                    <div class="page-fixed-main-content">
                        <div class="profile">
                            <div class="tabbable-line tabbable-full-width">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_1" data-toggle="tab" style="
    margin-top: -52px;
"> Edit Holiday </a>
                                    </li>
                                </ul>
                                <div class="portlet-body form" id="tab_1_1">
                                    <form action="{{route('editHoliday')}}" method="post" class="form-horizontal">
                                        @csrf
                                        <div class="form-body" style="padding: 0px">
                                            <div class="form-group">
                                                @if($errors->any())
                                                    <h4 class="col-md-3 control-label"
                                                        style="color: green;">{{$errors->first()}}</h4>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">duration</label>
                                                <div class="col-md-4">
                                                    <input type="datetime-local" value="{{$holiday['duration']}}"
                                                           name="duration" class="form-control"
                                                           placeholder="duration">
                                                    <input type="hidden" name="id" class="form-control"
                                                           value="{{$holiday['id']}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">description</label>
                                                <div class="col-md-4">
                                                    <input type="text" value="{{$holiday['description']}}"
                                                           name="description" class="form-control"
                                                           placeholder="description">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">date</label>
                                                <div class="col-md-4">
                                                    <input type="date" name="date" class="form-control"
                                                           value="{{$holiday['date']}}" placeholder="date">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">type</label>
                                                <div class="col-md-4">
                                                    <select name="type" class="form-control">
                                                        <option value="">-- Select One --</option>
                                                        @for($i=0;$i<count($type);$i++)
                                                        <option value="{{$type[$i]}}" {{ (isset($holiday['type']) || old('type'))? "selected":"" }}>{{$type[$i]}}</option>
                                                        @endfor

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">status</label>
                                                <div class="col-md-4">
                                                    <select name="status" class="form-control">
                                                        <option value="">-- Select One --</option>
                                                        @for($i=0;$i<count($status);$i++)
                                                            <option value="{{$status[$i]}}" {{ (isset($holiday['status']) || old('status'))? "selected":"" }}>{{$status[$i]}}</option>
                                                        @endfor

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">employee_id</label>
                                                <div class="col-md-4">
                                                    <select name="employee_id" class="form-control">
                                                        <option value="">-- Select One --</option>
                                                        @foreach ($employees as $employee)
                                                            <option
                                                                value="{{ $employee->id }}" {{ (isset($holiday->user->first_name) || old('employee'))? "selected":"" }}>{{ $employee->first_name }} {{ $employee->last_name }}</option>
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
