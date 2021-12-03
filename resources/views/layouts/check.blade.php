@extends('layouts.app')

@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
    <div class="page-container">
    @include('includes.memu')
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
                            <span>Check-In-Outs</span>
                        </li>
                    </ul>
                </div>
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="fas fa-user-check"></i>
                            <span class="caption-subject bold uppercase">Check-In-Outs</span>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <form action="{{route('addCheck')}}" method="post" class="form-horizontal">
                            @csrf
                            <div class="form-body" style="    margin-left: 161px;">
                                <div class="form-group">
                                    @if($errors->any())
                                        <h4 class="col-md-3 control-label"
                                            style="color: green;">{{$errors->first()}}</h4>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Time</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-key"></i>
                                        </span>
                                            <input type="datetime-local" name="time" class="form-control"
                                                   placeholder="time">
                                            <input type="hidden"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->id}}"
                                                   name="employee_id">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Type</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-sticky-note"></i>
                                            </span>
                                            <select name="type" class="form-control">
                                                <option value="in">in</option>
                                                <option value="out">out</option>
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
