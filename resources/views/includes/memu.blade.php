<div class="container-fluid">
    <div class="page-content page-content-popup">
        <div class="page-content-fixed-header">
            <!-- BEGIN BREADCRUMBS -->
            <ul class="page-breadcrumb">
                <li>
                    <a href="{{url('/home')}}">Dashboard</a>
                </li>
            </ul>
            <!-- END BREADCRUMBS -->
        </div>
        <div class="page-sidebar-wrapper col-lg-3">
            <div class="page-sidebar navbar-collapse collapse">
                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
                    data-slide-speed="200">
                    <li class="nav-item start active open">
                        <a href="{{url('/home')}}" class="nav-link ">
                            <i class="icon-graph"></i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-user"></i>
                            <span class="title">User</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="{{url('/profile')}}" class="nav-link ">
                                    <i class="icon-users"></i>
                                    <span class="title">Profile</span>
                                </a>
                                <a href="{{url('/profile/edit')}}" class="nav-link ">
                                    <i class="icon-users"></i>
                                    <span class="title">Edit Profile</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('/tables')}}" class="nav-link nav-toggle">
                            <i class="icon-briefcase"></i>
                            <span class="title">Tables</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item ">
                                <a href="{{url('/check/add')}}" class="nav-link "> CheckInOuts </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{url('/holiday')}}" class="nav-link "> Holiday </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{url('/holiday/add')}}" class="nav-link "> Add Holiday </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{url('/job')}}" class="nav-link "> job </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{url('/project')}}" class="nav-link "> project </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{url('/reward')}}" class="nav-link "> reward </a>
                            </li>
                        </ul>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        </div>
