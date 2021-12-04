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
        <div class="page-content-wrapper" style="margin-top: -36px;">
            <div class="page-content">
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="{{url('/home')}}">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Project</span>
                        </li>
                    </ul>
                </div>
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase"> Managed Table</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i>Project Table
                                    </div>
                                </div>
                                <div class="portlet-body flip-scroll">
                                    <table
                                        class="table table-striped table-bordered table-hover table-checkable order-column"
                                        id="sample_1">
                                        <thead>
                                        <tr>
                                            <th> Id</th>
                                            <th> Name</th>
                                            <th>Salary</th>
                                            <th> Description</th>
                                            <th>Manager</th>
                                            <th> Members</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($project as $myproject)
                                            <tr>
                                                <td> {{$myproject->id  }} </td>
                                                <td> {{$myproject->project['name'] }} </td>
                                                <td> {{$myproject->project['salary'] }} </td>
                                                <td> {{$myproject->project['description'] }} </td>
                                                <td> {{$myproject->project['manager_id'] }} </td>
                                                <td> {{$myproject->project['members'] }} </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{$project->links("pagination::bootstrap-4")}}
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


