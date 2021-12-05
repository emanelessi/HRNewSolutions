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
                            <span>Invoice</span>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Add Invoice</span>
                        </li>
                    </ul>
                </div>
                <div class="page-container">
                    <div class="page-content">
                        <div class="tab-pane" id="tab_2" style="
    margin-left: -209px;
">
                            <div class="portlet box green" style="
    margin-top: -60px;
">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>New Invoice
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form action="{{route('addInvoice')}}" method="post" class="form-horizontal">
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
                                                <div class="col-md-4">
                                                    <input type="text" name="type" class="form-control"
                                                           placeholder="type">
                                                    {{--                                                <select name="type" class="form-control">--}}
                                                    {{--                                                    <option value=""></option>--}}
                                                    {{--                                                    @foreach ($holidays as $holiday)--}}
                                                    {{--                                                        <option value="{{ $holiday->type }}">{{ $holiday->type }}</option>--}}
                                                    {{--                                                    @endforeach--}}
                                                    {{--                                                </select>--}}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Price</label>
                                                <div class="col-md-4">
                                                        <input type="datetime-local" name="price"
                                                               class="form-control"
                                                               placeholder="Price">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Date</label>
                                                <div class="col-md-4">
                                                        <input type="date" name="date" class="form-control"
                                                               placeholder="date">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Is Paid</label>
                                                <div class="col-md-4">
                                                    <input type="datetime-local" name="is_paid"
                                                           class="form-control"
                                                           placeholder="Is Paid">
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
