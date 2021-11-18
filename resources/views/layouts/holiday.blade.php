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
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">

                    <div class="page-bar">

                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption font-dark">
                                    <i class="icon-settings font-dark"></i>
                                    <span class="caption-subject bold uppercase"> Managed Table</span>
                                </div>

                            </div>
                            <div class="portlet-body">
                                <div class="table-toolbar">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-group">
                                                <button id="sample_editable_1_new" class="btn sbold green"> Add
                                                    New
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="btn-group pull-right">
                                                <button class="btn green  btn-outline dropdown-toggle"
                                                        data-toggle="dropdown">Tools
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-print"></i> Print </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-file-excel-o"></i> Export to Excel
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE BAR -->
                            <!-- BEGIN PAGE TITLE-->
                            <h1 class="page-title"> Holiday Dashboard
                            </h1>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                                    <div class="portlet box green">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Holiday Table
                                            </div>
                                        </div>
                                        <div class="portlet-body flip-scroll">
                                            <table
                                                class="table table-striped table-bordered table-hover table-checkable order-column"
                                                id="sample_1">
                                                <thead>
                                                <tr>

                                                    <th> id</th>
                                                    <th> duration</th>
                                                    <th> description</th>
                                                    <th class="numeric"> date</th>
                                                    <th> type</th>
                                                    <th> status</th>
                                                    <th> employee_id</th>
                                                    {{--                                                    <th> Delete</th>--}}
                                                    {{--                                                    <th> Edit</th>--}}
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($holiday as $myholiday)
                                                    <tr>
                                                        <td> {{$myholiday->id}} </td>
                                                        <td> {{$myholiday->duration}} </td>
                                                        <td> {{$myholiday->description}} </td>
                                                        <td>{{date('d-m-Y', strtotime($myholiday->date))}} </td>
                                                        <td> {{$myholiday->type}} </td>
                                                        <td> {{$myholiday->status}} </td>
                                                        <td> {{$myholiday->employee_id}} </td>
                                                        {{--                                                @foreach($myevent->Contacts as $con)--}}
                                                        {{--                                                    <td> {{$con->name}} </td>--}}
                                                        {{--                                                @endforeach--}}
                                                        {{--                                                        <td><a href="/holiday/delete/{{$myholiday->id}}"--}}
                                                        {{--                                                               style="color: red" class="remove">Delete </a>--}}
                                                        {{--                                                        </td>--}}
                                                        {{--                                                        <td><a href="/holiday/edit/{{$myholiday->id}}"--}}
                                                        {{--                                                               style="color:green" class="remove">Edit </a></td>--}}

                                                    </tr>

                                                @endforeach

                                                </tbody>
                                            </table>
                                            {{$holiday->links("pagination::bootstrap-4")}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- END CONTAINER -->

            </div>
        </div>
    </div>
    </div>


@endsection


