@extends('layouts.app')

@section('content')


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @include('includes.memu')
    <div class="page-fixed-main-content">
        <div class="profile">
            <div class="tabbable-line tabbable-full-width">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_1" data-toggle="tab"> Profile </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1_1">
                        <div class="row">
                            <div class="col-md-3">
                                <ul class="list-unstyled profile-nav">
                                    <li>
                                        <img src="../assets/pages/media/profile/people19.png"
                                             class="img-responsive pic-bordered" alt=""/>
                                        <a href="javascript:;" class="profile-edit"> edit </a>
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
                                                <a href="javascript:;"> {{$myprofile->email}} </a>
                                            </p>
                                            <ul class="list-inline">
                                                <li>
                                                    <i class="fa fa-map-marker"></i> {{$myprofile->phone_number}} </li>
                                                <li>
                                                    <i class="fa fa-calendar"></i> {{$myprofile->hire_date}} </li>
                                                <li>
                                                    <i class="fa fa-briefcase"></i> {{$myprofile->salary}} </li>
                                                <li>
                                                    <i class="fa fa-star"></i> {{$myprofile->department_id}} </li>
                                                <li>
                                                    <i class="fa fa-heart"></i> {{$myprofile->job_id}} </li>
                                                <li>
                                                    <i class="fa fa-heart"></i> {{$myprofile->manager_id}} </li>
                                            </ul>
                                    </div>
                                </div>
                                <div class="tabbable-line tabbable-custom-profile">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_11" data-toggle="tab"> Project </a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_22" data-toggle="tab"> Reward </a>
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
                                                            <i class="fa fa-bookmark"></i> Manager_id
                                                        </th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:;"> Pixel Ltd </a>
                                                        </td>
                                                        <td class="hidden-xs"> Server hardware purchase</td>
                                                        <td> 52560.10$
                                                            <span class="label label-success label-sm"> Paid </span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_1_22">
                                            <div class="tab-pane active" id="tab_1_1_1">
                                                <div class="scroller" data-height="290px" data-always-visible="1"
                                                     data-rail-visible1="1">
                                                    <ul class="feeds">
                                                        <li>
                                                            <div class="col1">
                                                                <div class="cont">
                                                                    <div class="cont-col1">
                                                                        <div class="label label-success">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cont-col2">
                                                                        <div class="desc"> note
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col2">
                                                                <div class="date"> cost</div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <p class="copyright-v2"> 2021 &copy; NewSolutions
    </p>

@endsection
