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
                    <i class="fa fa-gift"></i>Edit Invoices
                </div>
            </div>
            <div class="portlet-body form">
                <form action="{{route('editInvoice')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            @if($errors->any())
                                <h4 class="col-md-3 control-label"
                                    style="color: green;">{{$errors->first()}}</h4>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">type</label>
                            <div class="col-md-4">
                                <select name="type" class="form-control">
                                    <option value="">-- Select One --</option>
                                    @for($i=0;$i<count($type);$i++)
                                        <option value="{{$type[$i]}}"
                                                {{old($invoice['type'])}} selected>{{$type[$i]}}</option>
                                    @endfor

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">price</label>
                            <div class="col-md-4">
                                <input type="number" value="{{$invoice['price']}}"
                                       name="price" class="form-control"
                                       placeholder="price">
                                <input type="hidden" name="id" class="form-control"
                                       value="{{$invoice['id']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">date</label>
                            <div class="col-md-4">
                                <input type="date" name="date" class="form-control"
                                       value="{{$invoice['date']}}" placeholder="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">is_paid</label>
                            <div class="col-md-4">
                                <input type="checkbox" name="is_paid"
                                       class="form-control"
                                       placeholder="Is Paid"
                                       @if($invoice['is_paid']==true) checked @endif>
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

