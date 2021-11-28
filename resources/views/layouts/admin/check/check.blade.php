@extends('layouts.app')

@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @include('includes.memu')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
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
                    <h1 class="page-title"> Show Check Dashboard
                    </h1>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i>Check Table
                                    </div>
                                </div>
                                <div class="portlet-body flip-scroll">
                                    <table
                                        class="table table-striped table-bordered table-hover table-checkable order-column"
                                        id="sample_1">
                                        <thead>
                                        <tr>
                                            <th> Id</th>
                                            <th class="numeric"> Time</th>
                                            <th> Employee</th>
                                            <th> Delete</th>
                                            <th> Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($checks as $mychecks)
                                            <tr>
                                                <td> {{$mychecks->id}} </td>
                                                <td>{{date('d-m-Y h:i:s', strtotime($mychecks->time))}} </td>
                                                <td> {{$mychecks->user->first_name}} {{$mychecks->user->last_name}} </td>
                                                {{--                                                <td> @foreach ($users as $user){{$user->first_name}}-{{$user->last_name}}  @endforeach</td>--}}
                                                {{--                                                @foreach($myevent->Contacts as $con)--}}
                                                {{--                                                    <td> {{$con->name}} </td>--}}
                                                {{--                                                @endforeach--}}
                                                <td><a href="/admin/check/delete/{{$mychecks->id}}"
                                                       style="color: red" class="remove">Delete </a>
                                                </td>
                                                <td><a href="/admin/check/edit/{{$mychecks->id}}"
                                                       style="color:green" class="remove">Edit </a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{$checks->links("pagination::bootstrap-4")}}
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


