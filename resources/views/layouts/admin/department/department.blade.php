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
                        </li>
                    </ul>
                </div>
        <div class="page-content">
            <div class="page-bar" style="
    margin-left: -209px;
">
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
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i>Department Table
                                    </div>
                                </div>
                                <div class="portlet-body flip-scroll">
                                    <table
                                        class="table table-striped table-bordered table-hover table-checkable order-column"
                                        id="sample_1">
                                        <thead>
                                        <tr>
                                            <th> id</th>
                                            <th> Name</th>
                                            <th> Manager</th>
                                            <th> Delete</th>
                                            <th> Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($departments as $mydepartment)
                                            <tr>
                                                <td> {{$mydepartment->id}} </td>
                                                <td> {{$mydepartment->name}} </td>
                                                <td> {{$mydepartment->manager_id}} </td>

                                                {{--                                                <td> @foreach ($users as $user){{$user->first_name}}-{{$user->last_name}}  @endforeach</td>--}}
                                                {{--                                                @foreach($myevent->Contacts as $con)--}}
                                                {{--                                                    <td> {{$con->name}} </td>--}}
                                                {{--                                                @endforeach--}}
                                                <td><a href="/admin/department/delete/{{$mydepartment->id}}"
                                                       style="color: red" class="remove">Delete </a>
                                                </td>
                                                <td><a href="/admin/department/edit/{{$mydepartment->id}}"
                                                       style="color:green" class="remove">Edit </a></td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{$departments->links("pagination::bootstrap-4")}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="copyright-v2"> 2021 &copy; NewSolutions
    </p>
@endsection


