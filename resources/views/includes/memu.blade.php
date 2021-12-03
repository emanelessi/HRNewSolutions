<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">

        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false"
            data-auto-scroll="true" data-slide-speed="200">
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
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('/profile/edit')}}" class="nav-link ">
                            <i class="icon-users"></i>
                            <span class="title">Edit Profile</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item ">

                <a href="{{url('/check/add')}}" class="nav-link ">
                    <i class="fa fa-check"></i>
                    <span class="title">CheckInOuts</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{url('/holiday')}}" class="nav-link ">
                    <i class="fa fa-hourglass-o" aria-hidden="true"></i>
                    <span class="title">Holiday</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{url('/holiday/add')}}" class="nav-link ">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    <span class="title">Add Holiday</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{url('/job')}}" class="nav-link ">
                    <i class="icon-briefcase"></i>
                    <span class="title">Job</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{url('/project')}}" class="nav-link ">
                    <i class="fa fa-tasks" aria-hidden="true"></i>
                    <span class="title">Project</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{url('/reward')}}" class="nav-link ">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span class="title">Reward</span>
                </a>
            </li>
        </ul>

    </div>
</div>





