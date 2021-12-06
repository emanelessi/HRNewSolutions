<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">

        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false"
            data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start active open">
                <a href="{{url('/admin/home')}}" class="nav-link ">
                    <i class="icon-graph"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">Employee</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('/admin/employee')}}" class="nav-link ">
                            <i class="icon-users"></i>
                            <span class="title">Employee</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('/admin/employee/add')}}" class="nav-link ">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            <span class="title">Add Employee</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">Check</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('/admin/check')}}" class="nav-link ">
                            <i class="icon-users"></i>
                            <span class="title">Check</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('/admin/check/add')}}" class="nav-link ">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            <span class="title">Add Check</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">Department</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('/admin/department')}}" class="nav-link ">
                            <i class="icon-users"></i>
                            <span class="title">Department</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('/admin/department/add')}}" class="nav-link ">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            <span class="title">Add Department</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">Job</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('/admin/job')}}" class="nav-link ">
                            <i class="icon-briefcase"></i>
                            <span class="title">Job</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('/admin/job/add')}}" class="nav-link ">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            <span class="title">Add Job</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-tasks" aria-hidden="true"></i>
                    <span class="title">Project</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('/admin/project')}}" class="nav-link ">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                            <span class="title">Project</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('/admin/project/add')}}" class="nav-link ">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            <span class="title">Add Project</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-paperclip" aria-hidden="true"></i>
                    <span class="title">Invoice</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('/admin/invoice')}}" class="nav-link ">
                            <i class="fa fa-paperclip" aria-hidden="true"></i>
                            <span class="title">Invoice</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('/admin/invoice/add')}}" class="nav-link ">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            <span class="title">Add Invoice</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-hourglass-o" aria-hidden="true"></i>
                    <span class="title">Holiday</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('/admin/holiday')}}" class="nav-link ">
                            <i class="fa fa-hourglass-o" aria-hidden="true"></i>
                            <span class="title">Holiday</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('/admin/holiday/add')}}" class="nav-link ">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            <span class="title">Add Holiday</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">Job History</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('/admin/job/history')}}" class="nav-link ">
                            <i class="icon-briefcase"></i>
                            <span class="title">Job History</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('/admin/job/history/add')}}" class="nav-link ">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            <span class="title">Add Job History</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span class="title">Reward</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{url('/admin/reward')}}" class="nav-link ">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span class="title">Reward</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{url('/admin/reward/add')}}" class="nav-link ">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            <span class="title">Add Reward</span>
                        </a>
                    </li>
                </ul>
            </li>


        </ul>
    </div>
    <!-- END SIDEBAR -->
</div>





