@extends('layouts.app')

@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="container-fluid">
        <div class="page-content page-content-popup">
            <div class="page-content-fixed-header">
                <!-- BEGIN BREADCRUMBS -->
                <ul class="page-breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>Admin Dashboard 3</li>
                </ul>
                <!-- END BREADCRUMBS -->
            </div>
            <div class="page-sidebar-wrapper col-lg-3">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
                        data-slide-speed="200">
                        <li class="nav-item start active open">
                            <a href="{{url('/home')}}" class="nav-link ">
                                <i class="icon-graph"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">User</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="page_user_profile_2.html" class="nav-link ">
                                        <i class="icon-users"></i>
                                        <span class="title">Profile 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{url('/tables')}}" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title">Tables</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item ">
                                    <a href="{{url('/check/add')}}" class="nav-link "> CheckInOuts </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{url('/holiday')}}" class="nav-link "> Holiday </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{url('/holiday/add')}}" class="nav-link "> Buttons Extension </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{url('/job')}}" class="nav-link "> Scroller Extension </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{url('/project')}}" class="nav-link "> Editable Datatables </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{url('/reward')}}" class="nav-link "> Editable Datatables </a>
                                </li>
                            </ul>


                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <div class="portlet box yellow">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Add Review
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="{{route('addcheck')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                @if($errors->any())
                                    <h4 class="col-md-3 control-label" style="color: green;">{{$errors->first()}}</h4>
                                @endif </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">time</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <input type="datetime-local" name="time"  class="form-control"
                                               placeholder="time">
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
                                        <input type="number" name="employee_id"  class="form-control"
                                               placeholder="employee_id">
                                    </div>

                                </div>
                            </div>



                            <div class="form-actions fluid">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">Submit</button>
                                        <button type="button" class="btn default">Cancel</button>
                                    </div>

                                </div>
                            </div></div>
                    </form>

                </div>
            </div>


        </div>            <!-- END CONTAINER -->
    </div>


@endsection
