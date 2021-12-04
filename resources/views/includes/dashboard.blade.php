<!DOCTYPE html>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">

<div class="page-container">
    @include('includes.memu')
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
                        <span>Dashboard</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <div class="row widget-row">
                <div class="col-md-4">
                    <!-- BEGIN WIDGET THUMB -->
                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                        <h4 class="widget-thumb-heading">Holiday</h4>
                        <div class="widget-thumb-wrap">
                            <i class=" fa fa-plus-circle widget-thumb-icon bg-green "></i>
                            <span class="widget-thumb-body-stat" data-counter="counterup"
                                  style="display: block;font-size: 30px;font-weight: 600;color: #3e4f5e;"
                                  data-value="{{$holidays->count()}}">{{$holidays->count()}}</span>

                        </div>
                    </div>
                    <!-- END WIDGET THUMB -->
                </div>
                <div class="col-md-4">
                    <!-- BEGIN WIDGET THUMB -->
                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                        <h4 class="widget-thumb-heading">Project</h4>
                        <div class="widget-thumb-wrap">
                            <i class="widget-thumb-icon bg-red fa fa-tasks"></i>
                            <span class="widget-thumb-body-stat" data-counter="counterup"
                                  style="display: block;font-size: 30px;font-weight: 600;color: #3e4f5e;"
                                  data-value="{{$projects->count()}}">{{$projects->count()}}</span>
                        </div>
                    </div>
                    <!-- END WIDGET THUMB -->
                </div>
                <div class="col-md-4">
                    <!-- BEGIN WIDGET THUMB -->
                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                        <h4 class="widget-thumb-heading">Reward</h4>
                        <div class="widget-thumb-wrap">
                            <i class="widget-thumb-icon bg-purple fa fa-star"></i>
                            <span class="widget-thumb-body-stat" data-counter="counterup"
                                  style="display: block;font-size: 30px;font-weight: 600;color: #3e4f5e;"
                                  data-value="{{$rewards->count()}}">{{$rewards->count()}}</span>
                        </div>
                    </div>
                    <!-- END WIDGET THUMB -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption">
                                <i class="icon-bubbles font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Holiday</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                @foreach($holidays as $holiday)
                                <div class="tab-pane active" id="portlet_comments_1">
                                    <!-- BEGIN: Comments -->
                                    <div class="mt-comments">
                                        <div class="mt-comment">

                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">{{$holiday->type}}</span>
                                                    <span class="mt-comment-date">{{$holiday->date}} || {{$holiday->duration}} day</span>
                                                </div>
                                                <div class="mt-comment-text">{{$holiday->description}}
                                                </div>
                                                <div class="mt-comment-details">
                                                    <span
                                                        class="mt-comment-status mt-comment-status-pending">{{$holiday->status}}</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- END: Comments -->
                                </div>
                                @endforeach
                                    <div class="">
                                        <div class="">{{ $holidays->links() }}</div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption">
                                <i class="icon-bubbles font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Project</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                @foreach($projects as $project)
                                <div class="tab-pane active" id="portlet_comments_1">
                                    <!-- BEGIN: Comments -->
                                    <div class="mt-comments">
                                        <div class="mt-comment">
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                    <span class="mt-comment-author">{{$project->project->name}}</span>
                                                    <span class="mt-comment-date">{{$project->project->salary}} $</span>
                                                </div>
                                                <div class="mt-comment-text"> {{$project->project->description}}
                                                </div>
                                                <div class="mt-comment-details">
                                                    <span
                                                        class="mt-comment-status mt-comment-status-pending">{{$project->project->members}}</span>

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
                <div class="row" style="margin-right: -5px;">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-share font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">Reward</span>
                                </div>
                            </div>
                            @foreach($rewards as $reward)
                            <div class="portlet-body">
                                <div class="scroller" data-always-visible="1"
                                     data-rail-visible="0">
                                    <ul class="feeds">
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info" style="margin-left: 5px;">
                                                            {{$reward->cost}} $
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2" style="margin-left: 20px;">
                                                        <div class="desc"> {{$reward->note}}<br>
                                                            <span class="label label-sm label-warning "> {{$project->project->name}}
                                                                    <i class="fa fa-share"></i>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                            <div class="">
                                <div class="">{{ $rewards->links() }}</div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->

        <!-- END QUICK SIDEBAR -->
    </div></div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
            <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
               title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase
                Metronic!</a>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN QUICK NAV -->
        <div class="quick-nav-overlay"></div>
    </div>
</body>


