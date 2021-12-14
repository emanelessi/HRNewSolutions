@extends('admin.layouts.index')
@section('content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-dark">
                <i class="fas fa-user-check"></i>
                <span class="caption-subject bold uppercase">Check-In-Outs</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form action="{{route('addCheck')}}" method="post" class="form-horizontal">
                @csrf
                <div class="form-body" style="    margin-left: 161px;">
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
@endsection
@section('js')

@stop
