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
                            <span>Job</span>
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
                                                <button id="sample_editable_1_new" class="btn sbold green">
                                                    <a href={{"job/add"}} style="color:white">Add New Job</a>
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
                                    <div class="portlet box green">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Job Table
                                            </div>
                                        </div>
                                        <div class="portlet-body flip-scroll">
                                            <table
                                                class="table table-striped table-bordered table-hover table-checkable order-column"
                                                id="sample_1">
                                                <thead>
                                                <tr>
                                                    =
                                                    <th> Title</th>
                                                    <th> Description</th>
                                                    <th> Salary</th>
                                                    <th> Delete</th>
                                                    <th> Edit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($job as $myjob)
                                                    <tr>
                                                        <td> {{$myjob->title}} </td>
                                                        <td> {{$myjob->description}} </td>
                                                        <td> {{$myjob->salary}} $</td>
                                                        <td><a href="/admin/job/delete/{{$myjob->id}}"
                                                               class="btn btn-circle red">Delete <i
                                                                    class="fa fa-times"></i> </a>
                                                        </td>
                                                        <td><a href="/admin/job/edit/{{$myjob->id}}"
                                                               class="btn btn-circle green">Edit <i
                                                                    class="fa fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            {{$job->links("pagination::bootstrap-4")}}
                                        </div>
                                    </div>
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


