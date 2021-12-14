@extends('admin.layouts.index')

@section('content')

    <div class="tab-pane" id="tab_2">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Check-In-Outs
                </div>
            </div>
            <div class="portlet-body form">
                <form action="{{route('addCheck')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            @if($errors->any())
                                <h4 class="col-md-3 control-label"
                                    style="color: green;">{{$errors->first()}}</h4>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Time</label>
                            <div class="col-md-4">
                                <input type="datetime-local" name="time" class="form-control"
                                       placeholder="time">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Full Name</label>
                            <div class="col-md-4">
                                <select name="employee_id" class="form-control">
                                    <option value=" "></option>
                                    @foreach ($employees as $employee)
                                        <option
                                            value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Type</label>
                            <div class="col-md-4">
                                <select name="type" class="form-control">
                                    <option value="in">in</option>
                                    <option value="out">out</option>
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

