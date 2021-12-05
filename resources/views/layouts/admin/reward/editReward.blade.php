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
                            <span>Reward</span>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Edit Reward</span>
                        </li>
                    </ul>
                </div>
                <div class="page-container">
                    <div class="page-fixed-main-content">
                        <div class="profile">
                            <div class="tabbable-line tabbable-full-width">
                                <ul class="nav nav-tabs" style="
    margin-top: -52px;
">
                                    <li class="active">
                                        <a href="#tab_1_1" data-toggle="tab"> Edit Reward </a>
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
                                                <label class="col-md-3 control-label">Cost</label>
                                                <div class="col-md-4">
                                                    <input type="number" value="{{$users['cost']}}" name="cost"
                                                           class="form-control"
                                                           placeholder="Cost">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Note</label>
                                                <div class="col-md-4">
                                                    <input type="text" value="{{$users['note']}}" name="note"
                                                           class="form-control"
                                                           placeholder="Note">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Employee</label>
                                                <div class="col-md-4">
                                                    <select name="employee_id" class="form-control">
                                                        <option value="">-- Select One --</option>
                                                        <option
                                                            value="{{ $users->id }}">{{ $users->first_name }} {{ $users->last_name }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Project</label>
                                                <div class="col-md-4">
                                                    <select name="project_id" class="form-control">
                                                        <option value="">-- Select One --</option>
                                                        <option
                                                            value="{{ $projects->id }}">{{ $projects->name }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Members</label>
                                                <div class="col-md-4">
                                                    <input type="text" name="members" class="form-control"
                                                           value="{{$users['members']}}" placeholder="Members">
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
        </div>
    </div>
    <div class="page-footer">
        <div class="page-footer-inner">2021 &copy; NewSolutions
        </div>
    </div>
    </body>
@endsection
