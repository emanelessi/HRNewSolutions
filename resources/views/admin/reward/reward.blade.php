@extends('admin.layouts.index')
@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <link href="{{url('/')}}/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css " rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/')}}/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet"
          type="text/css"/>

    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-dark">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject bold uppercase"> Managed Table</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-toolbar">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <button id="sample_editable_1_new" class="btn sbold green"
                                    data-target="#stack1" data-toggle="modal">
                                Add New Reward
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div id="stack1" class="modal fade" tabindex="-1" data-focus-on="input:first">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true"></button>
                            <h4 class="modal-title"> Add New Reward</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('addReward')}}" method="post"
                                  class="form-horizontal" id="reward">
                                @csrf
                                <div class="alert alert-success alert-dismissible fade in" role="alert"
                                     style="display: none !important; color: red !important;">
                                    <strong>Success!</strong>Post was added successfully.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="form-body">

                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Note</label>
                                            <div class="col-md-8">
                                                <input type="text" name="note" class="form-control"
                                                       placeholder="note">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Cost</label>
                                            <div class="col-md-8">
                                                <input type="number" name="cost" class="form-control"
                                                       placeholder="cost">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Employee</label>
                                            <div class="col-md-8">
                                                <select name="employee_id" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($employees as $employee)
                                                        <option
                                                            value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Project</label>
                                            <div class="col-md-8">
                                                <select name="project_id" class="form-control">
                                                    <option value=""></option>
                                                    @foreach ($projects as $project)
                                                        <option
                                                            value="{{ $project->project->id }}">{{ $project->project->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal"
                                                    class="btn btn-outline dark">
                                                Close
                                            </button>
                                            <button type="submit" class="btn green">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="btn-group pull-right">
                            <button class="btn green  btn-outline dropdown-toggle"
                                    data-toggle="dropdown">Tools
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-print"></i> Print </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-file-excel-o"></i> Export to Excel
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i>Reward Table
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Cost</th>
                                    <th> Note</th>
                                    <th> Employee</th>
                                    <th> Project</th>
                                    <th> Delete</th>
                                    <th> Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($reward as $myreward)
                                    <tr>
                                        <td> {{$myreward->cost}} </td>
                                        <td> {{$myreward->note}} </td>
                                        <td> {{$myreward->user->first_name ?? null}} {{$myreward->user->last_name ?? null}} </td>
                                        <td> {{$myreward->project["name"] ?? null}} </td>
                                        <td><a href="/admin/reward/delete/{{$myreward->id}}"
                                               class="btn btn-circle red">Delete <i
                                                    class="fa fa-times"></i> </a>
                                        </td>
                                        <td><a href="/admin/reward/edit/{{$myreward->id}}"
                                               class="btn btn-circle green">Edit <i
                                                    class="fa fa-edit"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$reward->links("pagination::bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{url('/')}}/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"
            type="text/javascript"></script>
    <script src="{{url('/')}}/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js"
            type="text/javascript"></script>
    <script src="{{url('/')}}/assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $(document).on('submit', '#reward', function (e) {
                e.preventDefault();

                var url = $(this).attr('action')
                var form = $('#reward')[0];

                alert(url)
                var data = new FormData(form);
                $.ajax({
                    url: url,
                    method: 'post',
                    data: data,
                    type: 'json',
                    processData: false,
                    contentType: false,
                    success: function (result) {
                        console.log(result);
                        $('.alert-success').show();
                        // setInterval(function(){
                        //     // $('.alert-success').hide();
                        //     $('#stack1').modal('hide');
                        //     location.reload();
                        // }, 10000);
                    },
                    error: function (xhr, status, error) {
                        var errorMessage = xhr.status + ': ' + xhr.statusText
                        alert('Error - ' + errorMessage);
                    },
                    // success: function (result) {
                    //     if(result.errors) {
                    //         $('.alert-danger').html('');
                    //         $.each(result.errors, function(key, value) {
                    //             $('.alert-danger').show();
                    //             $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
                    //         });
                    //     } else {
                    //         $('.alert-danger').hide();
                    //         $('.alert-success').show();
                    //         $('.datatable').DataTable().ajax.reload();
                    //         setInterval(function(){
                    //             $('.alert-success').hide();
                    //             $('#CreateArticleModal').modal('hide');
                    //             location.reload();
                    //         }, 2000);
                    //     }
                    // }
                });
            });
        });
    </script>
@stop

