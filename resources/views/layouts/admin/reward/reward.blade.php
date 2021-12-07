@extends('includes.cssModal')
@extends('includes.jsModal')
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
                            <span>Reward</span>
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
                                                <button id="sample_editable_1_new" class="btn sbold green"
                                                        data-target="#stack1" data-toggle="modal">
                                                    Add New Reward
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="stack1" class="modal fade" tabindex="-1" data-focus-on="input:first">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true"></button>
                                                <h4 class="modal-title"> Add New Reward</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('Reward')}}" method="post" class="form-horizontal">
                                                    @csrf
                                                    <div class="form-body" style="padding: 0px">
                                                        <div class="form-group">
                                                            @if($errors->any())
                                                                <h4 class="col-md-3 control-label"
                                                                    style="color: green;">{{$errors->first()}}</h4>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Note</label>
                                                            <div class="col-md-8">
                                                                <input type="text" name="note" class="form-control"
                                                                       placeholder="note">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Cost</label>
                                                            <div class="col-md-8">
                                                                <input type="number" name="cost" class="form-control"
                                                                       placeholder="cost">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Employee</label>
                                                            <div class="col-md-8">
                                                                <select name="employee_id" class="form-control">
                                                                    <option value=""></option>
                                                                    @foreach ($employees as $employee)
                                                                        <option
                                                                            value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Project</label>
                                                            <div class="col-md-8">
                                                                <select name="project_id" class="form-control">
                                                                    <option value=""></option>
                                                                    @foreach ($projects as $project)
                                                                        <option
                                                                            value="{{ $project->project->id }}">{{ $project->project->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" data-dismiss="modal"
                                                                    class="btn btn-outline dark">
                                                                Close
                                                            </button>
                                                            <button type="submit" class="btn green">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
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
                                                <i class="fa fa-cogs"></i>Reward Table
                                            </div>
                                        </div>
                                        <div class="portlet-body flip-scroll">
                                            <table
                                                class="table table-striped table-bordered table-hover table-checkable order-column"
                                                id="sample_1">
                                                <thead>
                                                <tr>
                                                    <th> Cost</th>
                                                    <th> Note</th>
                                                    <th> Employee</th>
                                                    <th> Project</th>
                                                    <th> Delete</th>
                                                    <th> Edit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($reward as $myreward)
                                                    <tr>
                                                        <td> {{$myreward->cost}} </td>
                                                        <td> {{$myreward->note}} </td>
                                                        <td> {{$myreward->user->first_name ?? null}} {{$myreward->user->last_name ?? null}} </td>
                                                        <td> {{$myreward->project["name"] ?? null}} </td>
                                                        <td><a href="/admin/reward/delete/{{$myreward->id}}"
                                                               class="btn btn-circle red">Delete <i
                                                                    class="fa fa-times"></i> </a>
                                                        </td>
                                                        <td><a href="/admin/reward/edit/{{$myreward->id}}"
                                                               class="btn btn-circle green">Edit <i
                                                                    class="fa fa-edit"></i></a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            {{$reward->links("pagination::bootstrap-4")}}
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


