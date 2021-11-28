@extends('layouts.app')

@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @include('includes.memu')
    <div class="page-fixed-main-content">
        <div class="profile">
            <div class="tabbable-line tabbable-full-width">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_1" data-toggle="tab"> Personal info </a>
                    </li>
                    <li class="active">
                        <a href="#tab_3-3" data-toggle="tab"> Change Password </a>
                    </li>
                </ul>
                <div class="portlet-body form" id="tab_1_1">
                    <form action="{{route('editProfile')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="form-body" style="padding: 0px">
                            <div class="form-group">
                                @if($errors->any())
                                    <h4 class="col-md-3 control-label"
                                        style="color: green;">{{$errors->first()}}</h4>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">first name</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <input type="text" name="first_name" class="form-control"
                                               placeholder="first name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">last name</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <input type="text" name="last_name" class="form-control"
                                               placeholder="last name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">email</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <input type="email" name="email" class="form-control"
                                               placeholder="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">password</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <input type="password" name="password" class="form-control"
                                               placeholder="password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">phone number</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <input type="tel" name="phone_number" class="form-control"
                                               placeholder="phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">hire date</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <input type="datetime-local" name="hire_date" class="form-control"
                                               placeholder="hire date">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">salary</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <input type="number" name="salary" class="form-control"
                                               placeholder="salary">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">photo</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <input type="file" name="photo" class="form-control"
                                               placeholder="photo">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">department_id</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <select name="department_id" class="form-control">
                                            <option value="">-- Select One --</option>
                                            @foreach ($Departments as $Department)
                                                <option
                                                    value="{{ $Department->id }}" {{ (isset($Department->id) || old('id'))? "selected":"" }}>{{ $Department->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">job_id</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <select name="job_id" class="form-control">
                                            <option value=""></option>
                                            @foreach ($Jobs as $Job)
                                                <option  value="{{ $Job->id }}" selected >{{ $Job->title }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">manager_id</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <select name="manager_id" class="form-control">
                                            <option value=""></option>
                                            {{--                                            @foreach ($employees as $employee)--}}
                                            {{--                                                <option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>--}}
                                            {{--                                            @endforeach--}}
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
    <p class="copyright-v2"> 2021 &copy; NewSolutions
    </p>
@endsection
