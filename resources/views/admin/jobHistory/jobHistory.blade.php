@extends('admin.layouts.index')
@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <link href="{{url('/')}}/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css " rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/')}}/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet"
          type="text/css"/>

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
                                Add New Job History
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div id="stack1" class="modal fade" tabindex="-1" data-focus-on="input:first" style="top: 10%;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true"></button>
                            <h4 class="modal-title"> Add New Job History</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('History')}}" method="post"
                                  class="form-horizontal">
                                @csrf
                                <div class="form-body">
                                    <div class="form-group">
                                        @if($errors->any())
                                            <h4 class="col-md-3 control-label"
                                                style="color: green;">{{$errors->first()}}</h4>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Start Date</label>
                                        <div class="col-md-8">
                                            <input type="datetime-local"
                                                   name="start_date" class="form-control"
                                                   placeholder="Start Date">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">End Date</label>
                                        <div class="col-md-8">
                                            <input type="datetime-local"
                                                   name="end_date" class="form-control"
                                                   placeholder="End Date">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Employee Name</label>
                                        <div class="col-md-8">
                                            <select name="employee_id" class="form-control">
                                                <option value="">-- Select One --</option>
                                                @foreach ($Employees as $Employee)
                                                    <option
                                                        value="{{ $Employee->id }}">{{ $Employee->first_name }} {{ $Employee->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Job</label>
                                        <div class="col-md-8">
                                            <select name="job_id" class="form-control">
                                                <option value="">-- Select One --</option>
                                                @foreach ($job as $jobs)
                                                    <option
                                                        value="{{ $jobs->id }}">{{ $jobs->title }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Department</label>
                                        <div class="col-md-8">
                                            <select name="department_id" class="form-control">
                                                <option value="">-- Select One --</option>
                                                @foreach ($department as $departments)
                                                    <option
                                                        value="{{ $departments->id }}">{{ $departments->name }}</option>
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
                            <i class="fa fa-cogs"></i>Job History Table
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Start Date</th>
                                    <th> End Date</th>
                                    <th> Employee</th>
                                    <th> Job</th>
                                    <th> Department</th>
                                    <th> Delete</th>
                                    <th> Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($job_history as $myJobHistory)
                                    <tr>
                                        <td> {{$myJobHistory->start_date}} </td>
                                        <td> {{$myJobHistory->end_date}} </td>
                                        <td>  {{$myJobHistory->user->first_name ?? null}} {{$myJobHistory->user->last_name ?? null}} </td>
                                        <td> {{$myJobHistory->user->job->title ?? null}} </td>
                                        <td>  {{$myJobHistory->user->department->name ?? null}}</td>
                                        <td><a href="/admin/job/history/delete/{{$myJobHistory->id}}"
                                               class="btn btn-circle red">Delete <i
                                                    class="fa fa-times"></i> </a>
                                        </td>
                                        <td><a href="/admin/job/history/edit/{{$myJobHistory->id}}"
                                               class="btn btn-circle green">Edit <i
                                                    class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$job_history->links("pagination::bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{url('/')}}/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"
            type="text/javascript"></script>
    <script src="{{url('/')}}/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js"
            type="text/javascript"></script>
    <script src="{{url('/')}}/assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>

@stop

