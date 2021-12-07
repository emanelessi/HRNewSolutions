@extends('layouts.app')

@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
    <div class="page-container">
    @include('includes.memu')
    <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper" style="
    margin-top: -36px;
">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="{{url('/home')}}">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>User</span>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Profile</span>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE HEADER-->
                <div class="profile">
                    <div class="tabbable-line tabbable-full-width">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1_1" data-toggle="tab"> Overview </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1_1">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="list-unstyled profile-nav">
                                            <li>
                                                <img src="{{asset('storage/'.auth()->user()->photo)}}"
                                                     class="img-responsive pic-bordered" alt=""/>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-8 profile-info">
                                                @foreach($profile as $myprofile)
                                                    <h1 class="font-green sbold uppercase">{{$myprofile->first_name}}
                                                        -{{$myprofile->last_name}}</h1>
                                                    <p>
                                                        <a href="javascript:;"
                                                           style="color:#000;"> {{$myprofile->email}} </a>
                                                    </p>
                                                    <ul class="list-inline">
                                                        <li>
                                                            <i class="fa fa-mobile"
                                                               style="font-size: 22px;"></i> {{$myprofile->phone_number}}
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-calendar"></i> {{$myprofile->hire_date}}
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-briefcase"></i> {{$myprofile->salary}}$
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                            {{ $myprofile->department->name ?? null}}
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-briefcase"></i> {{$myprofile->job->title ?? null}}
                                                        </li>
                                                        {{--                                                        <li>--}}
                                                        {{--                                                            <i class="fa fa-heart"></i> {{$myprofile->users->first_name }} </li>--}}
                                                    </ul>
                                            </div>
                                        </div>
                                        <div class="tabbable-line tabbable-custom-profile">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab_1_11" data-toggle="tab"> Project </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_1_11">
                                                    <div class="portlet-body">
                                                        <table
                                                            class="table table-striped table-bordered table-advance table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>
                                                                    <i class="fa fa-briefcase"></i> Name
                                                                </th>
                                                                <th class="hidden-xs">
                                                                    <i class="fa fa-question"></i> Description
                                                                </th>
                                                                <th>
                                                                    <i class="fa fa-bookmark"></i> Manager
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($projects as $project)
                                                                <tr>
                                                                    <td>
                                                                        {{$project->project->name ?? null}}
                                                                    </td>
                                                                    <td class="hidden-xs"> {{$project->project->description ?? null}}</td>
                                                                    <td> {{$project->project->manager->first_name ?? null}}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>@endforeach
                                    </div>
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
