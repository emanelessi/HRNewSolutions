@extends('new.layouts.index')

@section('content')
    <!-- BEGIN CHART PORTLETS-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN BASIC CHART PORTLET-->
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Basic Chart</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_1" class="chart"> </div>
                </div>
            </div>
            <!-- END BASIC CHART PORTLET-->
            <!-- BEGIN BASIC CHART PORTLET-->
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-purple"></i>
                        <span class="caption-subject font-purple bold uppercase">Axis Labels Plugin</span>
                        <span class="caption-helper">
                                            <a target="_blank" href="http://github.com/markrcote/flot-axislabels">see documentation...</a>
                                        </span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_1_1" class="chart"> </div>
                </div>
            </div>
            <!-- END BASIC CHART PORTLET-->
            <!-- BEGIN TRACKING CURVES PORTLET-->
            <div class="portlet light  portlet-fit">
                <div class="portlet-title">
                    <div class="caption font-red">
                        <i class="icon-speech font-red"></i>
                        <span class="caption-subject bold uppercase">Tracking Curves</span>
                        <span class="caption-helper"></span>
                    </div>
                    <div class="actions">
                        <a href="javascript:;" class="btn btn-circle btn-default btn-sm">
                            <i class="fa fa-pencil"></i> Edit </a>
                        <a href="javascript:;" class="btn btn-circle btn-default btn-sm">
                            <i class="fa fa-plus"></i> Add </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_3" class="chart"> </div>
                </div>
            </div>
            <!-- END TRACKING CURVES PORTLET-->
            <!-- BEGIN DYNAMIC CHART PORTLET-->
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase">Dynamic Chart</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_4" class="chart"> </div>
                </div>
            </div>
            <!-- END DYNAMIC CHART PORTLET-->
            <!-- BEGIN STACK CHART CONTROLS PORTLET-->
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Stack Chart Controls</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_5" style="height:350px;"> </div>
                    <div class="btn-toolbar margin-top-20 margin-bottom-20">
                        <div class="btn-group stackControls">
                            <input type="button" class="btn blue btn-outline" value="With stacking" />
                            <input type="button" class="btn red btn-outline" value="Without stacking" /> </div>
                        <div class="space5"> </div>
                        <div class="btn-group graphControls">
                            <input type="button" class="btn dark btn-outline" value="Bars" />
                            <input type="button" class="btn dark btn-outline" value="Lines" />
                            <input type="button" class="btn dark btn-outline" value="Lines with steps" /> </div>
                    </div>
                </div>
            </div>
            <!-- END STACK CHART CONTROLS PORTLET-->
            <!-- BEGIN INTERACTIVE CHART PORTLET-->
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase">Interactive Chart</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_2" class="chart"> </div>
                </div>
            </div>
            <!-- END INTERACTIVE CHART PORTLET-->
            <!-- BEGIN BASIC CHART PORTLET-->
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-red"></i>
                        <span class="caption-subject font-red bold uppercase">Bar Chart</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_1_1_1_legendPlaceholder"> </div>
                    <div id="chart_1_1_1" class="chart"> </div>
                </div>
            </div>
            <!-- END BASIC CHART PORTLET-->
            <!-- BEGIN BASIC CHART PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-purple"></i>
                        <span class="caption-subject font-purple bold uppercase">Horizontal Bar Chart</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn green sbold uppercase btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;"> Option 1</a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="javascript:;">Option 2</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Option 3</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Option 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_1_2" class="chart"> </div>
                </div>
            </div>
            <!-- END BASIC CHART PORTLET-->
        </div>
    </div>
    <!-- END CHART PORTLETS-->
    <!-- BEGIN PIE CHART PORTLET-->
    <div class="row">
        <div class="col-md-6">
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-red"></i>
                        <span class="caption-subject font-red sbold uppercase">Pie Chart 1</span>
                    </div>
                    <div class="actions">
                        <input type="checkbox" class="make-switch" checked data-on-color="info" data-off-color="success" data-size="small"> </div>
                </div>
                <div class="portlet-body">
                    <div id="pie_chart" class="chart"> </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Pie Chart 2</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="pie_chart_1" class="chart"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-blue"></i>
                        <span class="caption-subject font-blue bold uppercase">Pie Chart 3</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="pie_chart_2" class="chart"> </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-red"></i>
                        <span class="caption-subject font-red bold uppercase">Pie Chart 4</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <h4>Slightly more transparent label backgrounds and adjusted the radius values to place them within the pie.</h4>
                    <div id="pie_chart_3" class="chart"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PIE CHART PORTLET-->
    <!-- BEGIN PIE CHART PORTLET-->
    <div class="row">
        <div class="col-md-6">
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Pie Chart 5</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <h4>Semi-transparent, black-colored label background.</h4>
                    <div id="pie_chart_4" class="chart"> </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet light portlet-fit ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-purple"></i>
                        <span class="caption-subject font-purple bold uppercase">Pie Chart 6</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <h4>Semi-transparent, black-colored label background placed at pie edge.</h4>
                    <div id="pie_chart_5" class="chart"> </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>Test</script>
@endpush

@section('js')

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{url('/')}}/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/global/plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/global/plugins/flot/jquery.flot.stack.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/global/plugins/flot/jquery.flot.crosshair.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/assets/global/plugins/flot/jquery.flot.axislabels.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{url('/')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{url('/')}}/assets/pages/scripts/charts-flotcharts.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

@stop
