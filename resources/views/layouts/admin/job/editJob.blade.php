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
                    <form action="{{route('editJob')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="form-body" style="padding: 0px">
                            <div class="form-group">
                                @if($errors->any())
                                    <h4 class="col-md-3 control-label"
                                        style="color: green;">{{$errors->first()}}</h4>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">title</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <input type="text" value="{{$users['title']}}" name="title" class="form-control"
                                               placeholder="title">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">description</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                        <input type="text" value="{{$users['description']}}" name="description" class="form-control"
                                               placeholder="description">
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
                                               value="{{$users['salary']}}" placeholder="salary">
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
