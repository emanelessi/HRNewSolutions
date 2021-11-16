
<div class="container-fluid">
    <div class="page-content page-content-popup">
        <div class="page-content-fixed-header">
            <!-- BEGIN BREADCRUMBS -->
            <ul class="page-breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>Admin Dashboard 3</li>
            </ul>
            <!-- END BREADCRUMBS -->
            <div class="content-header-menu">
                <!-- BEGIN DROPDOWN AJAX MENU -->
                <div class="dropdown-ajax-menu btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </button>
                    <ul class="dropdown-menu-v2">
                        <li>
                            <a href="start.html">Application</a>
                        </li>
                        <li>
                            <a href="start.html">Reports</a>
                        </li>
                        <li>
                            <a href="start.html">Templates</a>
                        </li>
                        <li>
                            <a href="start.html">Settings</a>
                        </li>
                    </ul>
                </div>
                <!-- END DROPDOWN AJAX MENU -->
                <!-- BEGIN MENU TOGGLER -->
                <button type="button" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="toggle-icon">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                </button>
                <!-- END MENU TOGGLER -->
            </div>
        </div>
        <div class="page-sidebar-wrapper">
            <!-- BEGIN SIDEBAR -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

                    <li class="nav-item start active open">
                        <a href="{{url('/home')}}" class="nav-link ">
                            <i class="icon-graph"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                <span class="badge badge-danger">5</span>
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
                                <a href="page_user_profile_2.html" class="nav-link ">
                                    <i class="icon-users"></i>
                                    <span class="title">Profile 2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-briefcase"></i>
                            <span class="title">Tables</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="table_datatables_managed.html" class="nav-link "> Managed Datatables </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_buttons.html" class="nav-link "> Buttons Extension </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_scroller.html" class="nav-link "> Scroller Extension </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_editable.html" class="nav-link "> Editable Datatables </a>
                                    </li>
                        </ul>


                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        </div>
        <div class="page-fixed-main-content">
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="row widget-row">
                <div class="col-md-3">
                    <!-- BEGIN WIDGET THUMB -->
                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                        <h4 class="widget-thumb-heading">Current Balance</h4>
                        <div class="widget-thumb-wrap">
                            <i class="widget-thumb-icon bg-green icon-bulb"></i>
                            <div class="widget-thumb-body">
                                <span class="widget-thumb-subtitle">USD</span>
                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="7,644">0</span>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET THUMB -->
                </div>
                <div class="col-md-3">
                    <!-- BEGIN WIDGET THUMB -->
                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                        <h4 class="widget-thumb-heading">Weekly Sales</h4>
                        <div class="widget-thumb-wrap">
                            <i class="widget-thumb-icon bg-red icon-layers"></i>
                            <div class="widget-thumb-body">
                                <span class="widget-thumb-subtitle">USD</span>
                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="1,293">0</span>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET THUMB -->
                </div>
                <div class="col-md-3">
                    <!-- BEGIN WIDGET THUMB -->
                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                        <h4 class="widget-thumb-heading">Biggest Purchase</h4>
                        <div class="widget-thumb-wrap">
                            <i class="widget-thumb-icon bg-purple icon-screen-desktop"></i>
                            <div class="widget-thumb-body">
                                <span class="widget-thumb-subtitle">USD</span>
                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="815">0</span>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET THUMB -->
                </div>
                <div class="col-md-3">
                    <!-- BEGIN WIDGET THUMB -->
                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                        <h4 class="widget-thumb-heading">Average Monthly</h4>
                        <div class="widget-thumb-wrap">
                            <i class="widget-thumb-icon bg-blue icon-bar-chart"></i>
                            <div class="widget-thumb-body">
                                <span class="widget-thumb-subtitle">USD</span>
                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="5,071">0</span>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET THUMB -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <div class="portlet light bordered">
                        <div class="portlet-title tabbable-line">
                            <div class="caption">
                                <i class="icon-bubbles font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Comments</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#portlet_comments_1" data-toggle="tab"> Pending </a>
                                </li>
                                <li>
                                    <a href="#portlet_comments_2" data-toggle="tab"> Approved </a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="portlet_comments_1">
                                    <!-- BEGIN: Comments -->
                                    <div class="mt-comments">
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Michael Baker</span>
                                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Natasha Kim</span>
                                                    <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The generated Lorem or non-characteristic Ipsum is therefore or non-characteristic. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Sebastian Davidson</span>
                                                    <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The standard chunk of Lorem or non-characteristic Ipsum used since the 1500s or non-characteristic. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Comments -->
                                </div>
                                <div class="tab-pane" id="portlet_comments_2">
                                    <!-- BEGIN: Comments -->
                                    <div class="mt-comments">
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Michael Baker</span>
                                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted by. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Natasha Kim</span>
                                                    <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Sebastian Davidson</span>
                                                    <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The standard chunk of Lorem Ipsum used since the 1500s </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Comments -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <div class="portlet light bordered">
                        <div class="portlet-title tabbable-line">
                            <div class="caption">
                                <i class="icon-bubbles font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Comments</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#portlet_comments_1" data-toggle="tab"> Pending </a>
                                </li>
                                <li>
                                    <a href="#portlet_comments_2" data-toggle="tab"> Approved </a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="portlet_comments_1">
                                    <!-- BEGIN: Comments -->
                                    <div class="mt-comments">
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Michael Baker</span>
                                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Natasha Kim</span>
                                                    <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The generated Lorem or non-characteristic Ipsum is therefore or non-characteristic. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Sebastian Davidson</span>
                                                    <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The standard chunk of Lorem or non-characteristic Ipsum used since the 1500s or non-characteristic. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Comments -->
                                </div>
                                <div class="tab-pane" id="portlet_comments_2">
                                    <!-- BEGIN: Comments -->
                                    <div class="mt-comments">
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Michael Baker</span>
                                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted by. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Natasha Kim</span>
                                                    <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Sebastian Davidson</span>
                                                    <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The standard chunk of Lorem Ipsum used since the 1500s </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Comments -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <div class="portlet light bordered">
                        <div class="portlet-title tabbable-line">
                            <div class="caption">
                                <i class="icon-bubbles font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Comments</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#portlet_comments_1" data-toggle="tab"> Pending </a>
                                </li>
                                <li>
                                    <a href="#portlet_comments_2" data-toggle="tab"> Approved </a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="portlet_comments_1">
                                    <!-- BEGIN: Comments -->
                                    <div class="mt-comments">
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Michael Baker</span>
                                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Natasha Kim</span>
                                                    <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The generated Lorem or non-characteristic Ipsum is therefore or non-characteristic. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Sebastian Davidson</span>
                                                    <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The standard chunk of Lorem or non-characteristic Ipsum used since the 1500s or non-characteristic. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Comments -->
                                </div>
                                <div class="tab-pane" id="portlet_comments_2">
                                    <!-- BEGIN: Comments -->
                                    <div class="mt-comments">
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Michael Baker</span>
                                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted by. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Natasha Kim</span>
                                                    <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Sebastian Davidson</span>
                                                    <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The standard chunk of Lorem Ipsum used since the 1500s </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Comments -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <div class="portlet light bordered">
                        <div class="portlet-title tabbable-line">
                            <div class="caption">
                                <i class="icon-bubbles font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Comments</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#portlet_comments_1" data-toggle="tab"> Pending </a>
                                </li>
                                <li>
                                    <a href="#portlet_comments_2" data-toggle="tab"> Approved </a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="portlet_comments_1">
                                    <!-- BEGIN: Comments -->
                                    <div class="mt-comments">
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Michael Baker</span>
                                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Natasha Kim</span>
                                                    <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The generated Lorem or non-characteristic Ipsum is therefore or non-characteristic. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Sebastian Davidson</span>
                                                    <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The standard chunk of Lorem or non-characteristic Ipsum used since the 1500s or non-characteristic. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Comments -->
                                </div>
                                <div class="tab-pane" id="portlet_comments_2">
                                    <!-- BEGIN: Comments -->
                                    <div class="mt-comments">
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Michael Baker</span>
                                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                </div>
                                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted by. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Natasha Kim</span>
                                                    <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">Sebastian Davidson</span>
                                                    <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                </div>
                                                <div class="mt-comment-text"> The standard chunk of Lorem Ipsum used since the 1500s </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="#">Quick Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Comments -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- BEGIN FOOTER -->
        <p class="copyright-v2"> 2021 &copy; NewSolutions</p>
        <!-- BEGIN QUICK SIDEBAR TOGGLER -->

        <!-- END QUICK SIDEBAR TOGGLER -->
        <a href="#index" class="go2top">
            <i class="icon-arrow-up"></i>
        </a>
        <!-- END FOOTER -->
    </div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN QUICK SIDEBAR -->
<a href="javascript:;" class="page-quick-sidebar-toggler">
    <i class="icon-login"></i>
</a>
<div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
    <div class="page-quick-sidebar">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                    <span class="badge badge-danger">2</span>
                </a>
            </li>
            <li>
                <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                    <span class="badge badge-success">7</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-bell"></i> Alerts </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-info"></i> Notifications </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-speech"></i> Activities </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                            <i class="icon-settings"></i> Settings </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                    <h3 class="list-heading">Staff</h3>
                    <ul class="media-list list-items">
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-success">8</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Bob Nilson</h4>
                                <div class="media-heading-sub"> Project Manager </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Nick Larson</h4>
                                <div class="media-heading-sub"> Art Director </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-danger">3</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Deon Hubert</h4>
                                <div class="media-heading-sub"> CTO </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Ella Wong</h4>
                                <div class="media-heading-sub"> CEO </div>
                            </div>
                        </li>
                    </ul>
                    <h3 class="list-heading">Customers</h3>
                    <ul class="media-list list-items">
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-warning">2</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Lara Kunis</h4>
                                <div class="media-heading-sub"> CEO, Loop Inc </div>
                                <div class="media-heading-small"> Last seen 03:10 AM </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-status">
                                <span class="label label-sm label-success">new</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Ernie Kyllonen</h4>
                                <div class="media-heading-sub"> Project Manager,
                                    <br> SmartBizz PTL </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Lisa Stone</h4>
                                <div class="media-heading-sub"> CTO, Keort Inc </div>
                                <div class="media-heading-small"> Last seen 13:10 PM </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-success">7</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Deon Portalatin</h4>
                                <div class="media-heading-sub"> CFO, H&D LTD </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Irina Savikova</h4>
                                <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-danger">4</span>
                            </div>
                            <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading">Maria Gomez</h4>
                                <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                <div class="media-heading-small"> Last seen 03:10 AM </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="page-quick-sidebar-item">
                    <div class="page-quick-sidebar-chat-user">
                        <div class="page-quick-sidebar-nav">
                            <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                <i class="icon-arrow-left"></i>Back</a>
                        </div>
                        <div class="page-quick-sidebar-chat-user-messages">
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:15</span>
                                    <span class="body"> When could you send me the report ? </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:15</span>
                                    <span class="body"> Its almost done. I will be sending it shortly </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:15</span>
                                    <span class="body"> Alright. Thanks! :) </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:16</span>
                                    <span class="body"> You are most welcome. Sorry for the delay. </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:17</span>
                                    <span class="body"> No probs. Just take your time :) </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:40</span>
                                    <span class="body"> Alright. I just emailed it to you. </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:17</span>
                                    <span class="body"> Great! Thanks. Will check it right away. </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:40</span>
                                    <span class="body"> Please let me know if you have any comment. </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:17</span>
                                    <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                </div>
                            </div>
                        </div>
                        <div class="page-quick-sidebar-chat-user-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type a message here...">
                                <div class="input-group-btn">
                                    <button type="button" class="btn green">
                                        <i class="icon-paper-clip"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                <div class="page-quick-sidebar-alerts-list">
                    <h3 class="list-heading">General</h3>
                    <ul class="feeds list-items">
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 4 pending tasks.
                                            <span class="label label-sm label-warning "> Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> Just now </div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Finance Report for year 2013 has been released. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-danger">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> New order received with
                                            <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 30 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-success">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-bell-o"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> Web server hardware needs to be upgraded.
                                            <span class="label label-sm label-warning"> Overdue </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 2 hours </div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-default">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> IPO Report for year 2013 has been released. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <h3 class="list-heading">System</h3>
                    <ul class="feeds list-items">
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 4 pending tasks.
                                            <span class="label label-sm label-warning "> Take action
                                                        <i class="fa fa-share"></i>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> Just now </div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-danger">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> Finance Report for year 2013 has been released. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-default">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-info">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> New order received with
                                            <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 30 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-success">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 24 mins </div>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <div class="cont-col1">
                                        <div class="label label-sm label-warning">
                                            <i class="fa fa-bell-o"></i>
                                        </div>
                                    </div>
                                    <div class="cont-col2">
                                        <div class="desc"> Web server hardware needs to be upgraded.
                                            <span class="label label-sm label-default "> Overdue </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2">
                                <div class="date"> 2 hours </div>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-info">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc"> IPO Report for year 2013 has been released. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col2">
                                    <div class="date"> 20 mins </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                <div class="page-quick-sidebar-settings-list">
                    <h3 class="list-heading">General Settings</h3>
                    <ul class="list-items borderless">
                        <li> Enable Notifications
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        <li> Allow Tracking
                            <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        <li> Log Errors
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        <li> Auto Sumbit Issues
                            <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        <li> Enable SMS Alerts
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                    </ul>
                    <h3 class="list-heading">System Settings</h3>
                    <ul class="list-items borderless">
                        <li> Security Level
                            <select class="form-control input-inline input-sm input-small">
                                <option value="1">Normal</option>
                                <option value="2" selected>Medium</option>
                                <option value="e">High</option>
                            </select>
                        </li>
                        <li> Failed Email Attempts
                            <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                        <li> Secondary SMTP Port
                            <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                        <li> Notify On System Error
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                        <li> Notify On SMTP Error
                            <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                    </ul>
                    <div class="inner-content">
                        <button class="btn btn-success">
                            <i class="icon-settings"></i> Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END QUICK SIDEBAR -->
<!-- BEGIN QUICK NAV -->
<div class="quick-nav-overlay"></div>
