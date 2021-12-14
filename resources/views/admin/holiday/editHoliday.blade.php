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
                    <i class="fa fa-gift"></i>Edit Holiday
                </div>
            </div>
            <div class="portlet-body form">
                <form action="{{route('editHoliday')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-body" style="padding: 0px">
                        <div class="form-group">
                            @if($errors->any())
                                <h4 class="col-md-3 control-label"
                                    style="color: green;">{{$errors->first()}}</h4>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">duration</label>
                            <div class="col-md-4">
                                <input type="number" value="{{$holiday['duration']}}"
                                       name="duration" class="form-control"
                                       placeholder="duration">
                                <input type="hidden" name="id" class="form-control"
                                       value="{{$holiday['id']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">description</label>
                            <div class="col-md-4">
                                <input type="text" value="{{$holiday['description']}}"
                                       name="description" class="form-control"
                                       placeholder="description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">date</label>
                            <div class="col-md-4">
                                <input type="date" name="date" class="form-control"
                                       value="{{$holiday['date']}}" placeholder="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">type</label>
                            <div class="col-md-4">
                                <select name="type" class="form-control">
                                    <option value="">-- Select One --</option>
                                    @for($i=0;$i<count($type);$i++)
                                        <option
                                            value="{{$type[$i]}}" {{ (isset($holiday['type']) || old('type'))? "selected":"" }}>{{$type[$i]}}</option>
                                    @endfor

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">status</label>
                            <div class="col-md-4">
                                <select name="status" class="form-control">
                                    <option value="">-- Select One --</option>
                                    @for($i=0;$i<count($status);$i++)
                                        <option
                                            value="{{$status[$i]}}" {{ (isset($holiday['status']) || old('status'))? "selected":"" }}>{{$status[$i]}}</option>
                                    @endfor

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">employee_id</label>
                            <div class="col-md-4">
                                <select name="employee_id" class="form-control">
                                    <option value="">-- Select One --</option>
                                    @foreach ($employees as $employee)
                                        <option
                                            value="{{ $employee->id }}" {{ (isset($holiday->user->first_name) || old('employee'))? "selected":"" }}>{{ $employee->first_name }} {{ $employee->last_name }}</option>
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

