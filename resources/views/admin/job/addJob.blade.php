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
                    <i class="fa fa-gift"></i>New Job
                </div>
            </div>
            <div class="portlet-body form">
                <form action="{{route('addJob')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            @if($errors->any())
                                <h4 class="col-md-3 control-label"
                                    style="color: green;">{{$errors->first()}}</h4>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Title</label>
                            <div class="col-md-4">
                                <input type="text" name="title" class="form-control"
                                       placeholder="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Description</label>
                            <div class="col-md-4">
                                <input type="text" name="description" class="form-control"
                                       placeholder="description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Salary</label>
                            <div class="col-md-4">
                                <input type="number" name="salary" class="form-control"
                                       placeholder="salary">
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

