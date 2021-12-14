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
                                Add New Invoice
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div id="stack1" class="modal fade" tabindex="-1" data-focus-on="input:first" style="top: 10%;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true"></button>
                            <h4 class="modal-title"> Add New Invoice</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('Invoice')}}" method="post"
                                  class="form-horizontal">
                                @csrf
                                <div class="form-body" style="padding: 0px">
                                    <div class="form-group">
                                        @if($errors->any())
                                            <h4 class="col-md-3 control-label"
                                                style="color: green;">{{$errors->first()}}</h4>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Type</label>
                                        <div class="col-md-8">
                                            <select name="type" class="form-control">
                                                <option value="">-- Select One --</option>
                                                @for($i=0;$i<count($type);$i++)
                                                    <option
                                                        value="{{$type[$i]}}">{{$type[$i]}}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Price</label>
                                        <div class="col-md-8">
                                            <input type="number" name="price"
                                                   class="form-control"
                                                   placeholder="Price">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date</label>
                                        <div class="col-md-8">
                                            <input type="date" name="date" class="form-control"
                                                   placeholder="date">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Is Paid</label>
                                        <div class="col-md-8">
                                            <input type="checkbox" name="is_paid"
                                                   class="form-control"
                                                   placeholder="Is Paid">
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
                <!-- BEGIN SAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i>Invoices Table
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th> Type</th>
                                    <th> Price</th>
                                    <th> Date</th>
                                    <th> Paid</th>
                                    <th> Delete</th>
                                    <th> Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($invoices as $invoice)
                                    <tr>
                                        <td> {{$invoice->type}} </td>
                                        <td> {{$invoice->price}} </td>
                                        <td>{{date('d-m-Y', strtotime($invoice->date))}} </td>
                                        <td> {{$invoice->is_paid}} </td>
                                        <td><a href="/admin/invoice/delete/{{$invoice->id}}"
                                               class="btn btn-circle red">Delete <i
                                                    class="fa fa-times"></i> </a>
                                        </td>
                                        <td><a href="{{url('/admin/invoice/edit/'.$invoice->id)}}"
                                               class="btn btn-circle green">Edit <i
                                                    class="fa fa-edit"></i></a>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$invoices->links("pagination::bootstrap-4")}}
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

@stop
