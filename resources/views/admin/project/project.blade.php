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
                                Add New Project
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div id="stack1" class="modal fade" tabindex="-1" data-focus-on="input:first">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true"></button>
                            <h4 class="modal-title"> Add New Project</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('addProject')}}" method="post"
                                  class="form-horizontal" id="project">
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
                                        <label class="col-md-3 control-label">Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="name" class="form-control"
                                                   placeholder="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Salary</label>
                                        <div class="col-md-8">
                                            <input type="number" name="salary" class="form-control"
                                                   placeholder="salary">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Description</label>
                                        <div class="col-md-8">
                                            <input type="text" name="description"
                                                   class="form-control"
                                                   placeholder="description">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Members</label>
                                        <div class="col-md-8">
                                            <input type="text" name="members" class="form-control"
                                                   placeholder="members">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Manager</label>
                                        <div class="col-md-8">
                                            <select name="manager_id" class="form-control">
                                                <option value=""></option>
                                                @foreach ($employees as $employee)
                                                    <option
                                                        value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
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
                            <i class="fa fa-cogs"></i>Project Table
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Name</th>
                                    <th> Empolyee</th>
                                    <th>Salary</th>
                                    <th> Description</th>
                                    <th> Manager</th>
                                    <th> Members</th>
                                    <th> Delete</th>
                                    <th> Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($project as $myproject)
                                    <tr>
                                        <td> {{$myproject->project['name'] ?? null}} </td>
                                        <td> {{$myproject->user['first_name'] ?? null}} {{$myproject->user['last_name'] ?? null}} </td>
                                        <td> {{$myproject->project['salary'] ?? null}} </td>
                                        <td> {{$myproject->project['description'] ?? null}} </td>
                                        <td> {{$myproject->manager->first_name ?? null }}  </td>

                                        <td> @for ($i=0; $i <= $myproject->project->count(); $i++)
                                                {{$myproject->project['members']['names'][$i] ?? null}}
                                            @endfor
                                            <br>
                                        </td>

                                        <td><a href="/admin/project/delete/{{$myproject->id}}"
                                               class="btn btn-circle red">Delete <i
                                                    class="fa fa-times"></i> </a>
                                        </td>
                                        <td><a href="/admin/project/edit/{{$myproject->id}}"
                                               class="btn btn-circle green">Edit <i
                                                    class="fa fa-edit"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$project->links("pagination::bootstrap-4")}}
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
            $(document).on('submit', '#project', function (e) {
                e.preventDefault();

                var url = $(this).attr('action')
                var form = $('#project')[0];

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

