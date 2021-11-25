@extends('layouts.app')

@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @include('includes.memu')

    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="fas fa-user-check"></i>
                            <span class="caption-subject bold uppercase">Check-In-Outs</span>
                        </div>

                    </div>
                <div class="portlet-body form">
                    <form action="{{route('addcheck')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="form-body" style="    margin-left: 161px;">
                            <div class="form-group">
                                @if($errors->any())
                                    <h4 class="col-md-3 control-label" style="color: green;">{{$errors->first()}}</h4>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">time</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-key"></i>
                                        </span>
                                        <input type="datetime-local" name="time" class="form-control"
                                               placeholder="time">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">employee_id</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-sticky-note"></i>
                                            </span>
                                        <input type="number" name="employee_id" class="form-control"
                                               placeholder="employee_id">
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
