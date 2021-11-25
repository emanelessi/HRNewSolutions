@extends('layouts.app')

@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="clearfix"></div>
    <div class="page-container">
        @include('includes.memu')

        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
                    data-slide-speed="200" style="padding-top: 20px">
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                            <span></span>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a href="{{url('/home')}}" class="nav-link nav-toggle ">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">Tables</h3>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('/event')}}" class="nav-link nav-toggle">
                            <i class="icon-bulb"></i>
                            <span class="title">Events</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('/contact')}}" class="nav-link nav-toggle">
                            <i class="icon-call-end"></i>
                            <span class="title">Contacts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/user')}}" class="nav-link nav-toggle">
                            <i class="icon-user"></i>
                            <span class="title">Users</span>
                        </a>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">Add</h3>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('/event/add')}}" class="nav-link nav-toggle">
                            <i class="icon-note"></i>
                            <span class="title">New Event</span>
                        </a>
                    </li>
                    <li class="nav-item  start active open">
                        <a href="{{url('/contact/add')}}" class="nav-link nav-toggle">
                            <i class="icon-users"></i>
                            <span class="title">New Contact</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END SIDEBAR -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">

                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="{{url('/contact/add')}}">New Contact</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Add</span>
                            </li>
                        </ul>

                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h1 class="page-title"> Add New Contact
                    </h1>
                    <div class="tab-pane" id="tab_2">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>New Contact
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form action="{{route('addholiday')}}" method="post" class="form-horizontal">
                                    @csrf
                                    <div class="form-body" style="    margin-left: 161px;">
                                        <div class="form-group">
                                            @if($errors->any())
                                                <h4 class="col-md-3 control-label"
                                                    style="color: green;">{{$errors->first()}}</h4>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">duration</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                    <input type="text" name="duration" class="form-control"
                                                           placeholder="duration">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">description</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                    <input type="text" name="description" class="form-control"
                                                           placeholder="description">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">date</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                    <input type="date" name="date" class="form-control"
                                                           placeholder="date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">type</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                    <input type="text" name="type" class="form-control"
                                                           placeholder="type">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">employee_id</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-sticky-note"></i>
                                            </span>
                                                    <input type="number" name="employee_id" class="form-control"
                                                           placeholder="employee_id">
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
