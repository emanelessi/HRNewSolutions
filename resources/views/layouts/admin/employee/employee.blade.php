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
                            <span>Employee</span>
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
                                                    Add New Employee
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div id="stack1" class="modal fade" tabindex="-1" data-focus-on="input:first">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true"></button>
                                                <h4 class="modal-title"> Add New Employee</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('Employee')}}" method="post"
                                                      class="form-horizontal">
                                                    @csrf
                                                    <div class="form-body" style="padding: 0px">
                                                        <div class="form-group">
                                                            @if($errors->any())
                                                                <h4 class="col-md-3 control-label"
                                                                    style="color: green;">{{$errors->first()}}</h4>
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">First Name</label>
                                                            <div class="col-md-8">
                                                                <input type="text" name="first_name"
                                                                       class="form-control"
                                                                       placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Last Name</label>
                                                            <div class="col-md-8">
                                                                <input type="text" name="last_name" class="form-control"
                                                                       placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Email</label>
                                                            <div class="col-md-8">
                                                                <input type="email" name="email" class="form-control"
                                                                       placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Password</label>
                                                            <div class="col-md-8">
                                                                <input type="password" name="password"
                                                                       class="form-control"
                                                                       placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Phone Number</label>
                                                            <div class="col-md-8">
                                                                <input type="tel" name="phone_number"
                                                                       class="form-control"
                                                                       placeholder="Phone Number">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Hire Date</label>
                                                            <div class="col-md-8">
                                                                <input type="date" name="hire_date" class="form-control"
                                                                       placeholder="Hire Date">

                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Salary</label>
                                                            <div class="col-md-8">
                                                                <input type="number" name="salary" class="form-control"
                                                                       placeholder="Salary">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Photo</label>
                                                            <div class="col-md-8">
                                                                <input type="file" name="photo" class="form-control"
                                                                       placeholder="Photo">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Department</label>
                                                            <div class="col-md-8">
                                                                <select name="department_id" class="form-control">
                                                                    <option value=""></option>
                                                                    @foreach ($departments as $department)
                                                                        <option
                                                                            value="{{ $department->id }}">{{ $department->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Job</label>
                                                            <div class="col-md-8">
                                                                <select name="job_id" class="form-control">
                                                                    <option value=""></option>
                                                                    @foreach ($jobs as $job)
                                                                        <option
                                                                            value="{{ $job->id }}">{{ $job->title }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Manager</label>
                                                            <div class="col-md-8">
                                                                <select name="manager_id" class="form-control">
                                                                    <option value=""></option>
                                                                    @foreach ($users as $user)
                                                                        <option
                                                                            value="{{ $user->id }}">{{ $user->first_name }} {{ $user->last_name }}</option>
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
                                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                                    <div class="portlet box green">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-cogs"></i>Employees Table
                                            </div>
                                        </div>
                                        <div class="portlet-body flip-scroll">
                                            <table
                                                class="table table-striped table-bordered table-hover table-checkable order-column"
                                                id="sample_1">
                                                <thead>
                                                <tr>
                                                    <th> First Name</th>
                                                    <th> Last Name</th>
                                                    <th> Email</th>
                                                    <th> Phone Number</th>
                                                    <th class="numeric"> Hire Date</th>
                                                    <th class="numeric"> Salary</th>
                                                    <th> Department</th>
                                                    <th> Job</th>
                                                    <th> Manager</th>
                                                    <th> Delete</th>
                                                    <th> Edit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($employee as $myemployee)
                                                    <tr>
                                                        <td> {{$myemployee->first_name}} </td>
                                                        <td> {{$myemployee->last_name}} </td>
                                                        <td> {{$myemployee->email}} </td>
                                                        <td> {{$myemployee->phone_number}} </td>
                                                        <td>{{date('d-m-Y h:i:s', strtotime($myemployee->hire_date))}} </td>
                                                        <td> {{$myemployee->salary}} $</td>
                                                        <td> {{$myemployee->department["name"] ?? null}}</td>
                                                        <td> {{$myemployee->job["title"] ?? null}} </td>
                                                        <td> {{$myemployee->manager->first_name ?? null}} </td>

                                                        <td>
                                                            <a href="/admin/employee/delete/{{$myemployee->id}}"
                                                               class="btn btn-circle red">Delete <i
                                                                    class="fa fa-times"></i> </a>
                                                        </td>
                                                        <td><a href="/admin/employee/edit/{{$myemployee->id}}"
                                                               class="btn btn-circle green">Edit <i
                                                                    class="fa fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            {{$employee->links("pagination::bootstrap-4")}}
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


