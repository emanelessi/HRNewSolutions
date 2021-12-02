@extends('layouts.app')

@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @include('includes.memuAdmin')
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
                    <form action="{{route('editReward')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="form-body" style="padding: 0px">
                            <div class="form-group">
                                @if($errors->any())
                                    <h4 class="col-md-3 control-label"
                                        style="color: green;">{{$errors->first()}}</h4>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">cost</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <input type="number" value="{{$users['cost']}}" name="cost" class="form-control"
                                               placeholder="cost">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">note</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <input type="text" value="{{$users['note']}}" name="note" class="form-control"
                                               placeholder="note">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">employee_id</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <select name="employee_id" class="form-control">
                                            <option value="">-- Select One --</option>
                                                <option
                                                    value="{{ $users->id }}">{{ $users->first_name }} {{ $users->last_name }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">project_id</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <select name="project_id" class="form-control">
                                            <option value="">-- Select One --</option>
                                                <option
                                                    value="{{ $projects->id }}">{{ $projects->name }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">members</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <input type="text" name="members" class="form-control"
                                               value="{{$users['members']}}" placeholder="members">
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
