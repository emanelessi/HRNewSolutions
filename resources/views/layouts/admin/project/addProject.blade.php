@extends('layouts.app')

@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="clearfix"></div>
    <div class="page-container">
        @include('includes.memu')


        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">


                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title"> Add New Project
                </h1>
                <div class="tab-pane" id="tab_2">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>New Project
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form action="{{route('addProject')}}" method="post" class="form-horizontal">
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
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <input type="text" name="name" class="form-control"
                                                       placeholder="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Salary</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <input type="text" name="salary" class="form-control"
                                                       placeholder="salary">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Description</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <input type="text" name="description" class="form-control"
                                                       placeholder="description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Members</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <input type="text" name="members" class="form-control"
                                                       placeholder="members">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Manager</label>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                <select name="manager_id" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($employees as $employee)
                                                        <option
                                                            value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
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
    </div>


@endsection
