@extends('admin.layouts.index')
@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
            <div class="page-container">
                <div class="page-content">
                    <div class="tab-pane" id="tab_2" style="
    margin-left: -209px;
">
                        <div class="portlet box green" style="
    margin-top: -60px;
">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>New Department
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form action="{{route('addDepartment')}}" method="post" class="form-horizontal">
                                    @csrf
                                    <div class="form-body" style="padding: 0px">
                                        <div class="form-group">
                                            @if($errors->any())
                                                <h4 class="col-md-3 control-label"
                                                    style="color: green;">{{$errors->first()}}</h4>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Name</label>
                                            <div class="col-md-4">
                                                <input type="text" name="name" class="form-control"
                                                       placeholder="name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Manager</label>
                                            <div class="col-md-4">
                                                <select name="manager_id" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($employees as $employee)
                                                        <option
                                                            value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
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
                </div>
            </div>

@endsection
@section('js')

@stop
