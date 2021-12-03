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
                            <span>Department</span>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Edit Department</span>
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
                                        <a href="#tab_1_1" data-toggle="tab"> Edit Department </a>
                                    </li>
                                </ul>
                                <div class="portlet-body form" id="tab_1_1">
                                    <form action="{{route('editDepartment')}}" method="post" class="form-horizontal">
                                        @csrf
                                        <div class="form-body" style="padding: 0px">
                                            <div class="form-group">
                                                @if($errors->any())
                                                    <h4 class="col-md-3 control-label"
                                                        style="color: green;">{{$errors->first()}}</h4>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">name</label>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                        <input type="text" name="name" class="form-control"
                                                               placeholder="name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">manager_id</label>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                        <select name="manager_id" class="form-control">
                                                            <option value=""></option>
                                                            {{--                                            @foreach ($employees as $employee)--}}
                                                            {{--                                                <option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>--}}
                                                            {{--                                            @endforeach--}}
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
                    <p class="copyright-v2"> 2021 &copy; NewSolutions
                    </p>
@endsection
