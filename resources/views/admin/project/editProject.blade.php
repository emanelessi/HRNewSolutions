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
                    <i class="fa fa-gift"></i> Edit Project
                </div>
            </div>
            <div class="portlet-body form">
                <form action="{{route('editProject')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-body" style="padding: 0px">
                        <div class="form-group">
                            @if($errors->any())
                                <h4 class="col-md-3 control-label"
                                    style="color: green;">{{$errors->first()}}</h4>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">name</label>
                            <div class="col-md-4">
                                <input type="text" value="{{$users['name']}}" name="name"
                                       class="form-control"
                                       placeholder="name">
                                <input type="hidden" name="id" class="form-control"
                                       value="{{$users['id']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">salary</label>
                            <div class="col-md-4">
                                <input type="number" value="{{$users['salary']}}" name="salary"
                                       class="form-control"
                                       placeholder="salary">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">description</label>
                            <div class="col-md-4">
                                <input type="text" value="{{$users['description']}}"
                                       name="description" class="form-control"
                                       placeholder="description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">manager_id</label>
                            <div class="col-md-4">
                                <input type="number" name="manager_id" class="form-control"
                                       value="{{$users['manager_id']}}"
                                       placeholder="manager_id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">members</label>
                            <div class="col-md-4">
                                <input type="text" name="members" class="form-control"
                                       value="{{$users['members']}}" placeholder="members">
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

