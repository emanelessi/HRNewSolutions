@extends('admin.layouts.index')
@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="tab-pane" id="tab_2">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>New Reward
                </div>
            </div>
            <div class="portlet-body form">
                <form action="{{route('addReward')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            @if($errors->any())
                                <h4 class="col-md-3 control-label"
                                    style="color: green;">{{$errors->first()}}</h4>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Note</label>
                            <div class="col-md-4">
                                <input type="text" name="note" class="form-control"
                                       placeholder="note">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Cost</label>
                            <div class="col-md-4">
                                <input type="number" name="cost" class="form-control"
                                       placeholder="cost">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Employee</label>
                            <div class="col-md-4">
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
                            <div class="col-md-4">
                                <select name="project_id" class="form-control">
                                    <option value=""></option>
                                    @foreach ($projects as $project)
                                        <option
                                            value="{{ $project->project->id }}">{{ $project->project->name }}</option>
                                    @endforeach
                                </select>
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

@endsection

