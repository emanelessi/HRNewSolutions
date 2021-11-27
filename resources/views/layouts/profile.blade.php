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
                                                    <i class="fa fa-mobile"
                                                       style="font-size: 22px;"></i> {{$myprofile->phone_number}} </li>
                                                <li>
                                                    <i class="fa fa-calendar"></i> {{$myprofile->hire_date}} </li>
                                                <li>
                                                    <i class="fa fa-briefcase"></i> {{$myprofile->salary}}$
                                                </li>
                                                <li>
                                                    <i class="fa fa-star"></i>
                                                    {{ $myprofile->department->name }}
                                                </li>
                                                {{--                                                <li>--}}
                                                {{--                                                    <i class="fa fa-briefcase"></i> {{$myprofile->jobs->title}} </li>--}}
                                                {{--                                                <li>--}}
                                                {{--                                                    <i class="fa fa-heart"></i> {{$myprofile->users->first_name }} </li>--}}
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
                                                    @foreach ($projects as $project)
                                                        <tr>
                                                            <td>
                                                                <a href="javascript:;"> {{$project->name}} </a>
                                                            </td>
                                                            <td class="hidden-xs"> {{$project->description}}</td>
                                                            <td> {{$project->manager_id}}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab_1_22">
                                            <div class="tab-pane active" id="tab_1_1_1">
                                                <div class="scroller" data-height="290px" data-always-visible="1"
                                                     data-rail-visible1="1">
                                                    @foreach ($rewards as $reward)

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
                                                                            <div class="desc"> {{$reward->note}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> {{$reward->cost}}</div>
                                                                </div>
                                                                @endforeach
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
