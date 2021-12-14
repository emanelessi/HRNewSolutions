<!DOCTYPE html>

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
                        <span>Dashboard</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <div class="row widget-row">
                <div class="col-md-3">
                    <!-- BEGIN WIDGET THUMB -->
                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                        <h4 class="widget-thumb-heading">Users</h4>
                        <div class="widget-thumb-wrap">
                            <i class=" fa fa-user widget-thumb-icon bg-green "></i>
                            <span class="widget-thumb-body-stat" data-counter="counterup"
                                  style="display: block;font-size: 30px;font-weight: 600;color: #3e4f5e;"
                                  data-value="{{$users->count()}}">{{$users->count()}}</span>

                        </div>
                    </div>
                    <!-- END WIDGET THUMB -->
                </div>
                <div class="col-md-3">
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
                <div class="col-md-3">
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
                <div class="col-md-3">
                    <!-- BEGIN WIDGET THUMB -->
                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                        <h4 class="widget-thumb-heading">Holiday</h4>
                        <div class="widget-thumb-wrap">
                            <i class=" fa fa-plus-circle widget-thumb-icon bg-yellow "></i>
                            <span class="widget-thumb-body-stat" data-counter="counterup"
                                  style="display: block;font-size: 30px;font-weight: 600;color: #3e4f5e;"
                                  data-value="{{$holidays->count()}}">{{$holidays->count()}}</span>
                        </div>
                    </div>
                    <!-- END WIDGET THUMB -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
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
                                    {{ $holidays->links("pagination::bootstrap-4") }}

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
                                    {{ $projects->links("pagination::bootstrap-4") }}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"  style="margin-right: -5px;">
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
                            {{ $rewards->links("pagination::bootstrap-4") }}
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12 " >
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-share font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">Job</span>
                                </div>
                            </div>
                            @foreach($jobs as $job)
                                <div class="portlet-body">
                                    <div class="scroller" data-always-visible="1"
                                         data-rail-visible="0">
                                        <ul class="feeds">
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info" style="margin-left: 5px;">
                                                                {{$job->salary}} $
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2" style="margin-left: 20px;">
                                                            <div class="desc">
                                                                <span class="label label-sm label-danger "> {{$job->title}}
                                                                    <i class="fa fa-share"></i>
                                                                    <br>
                                                                </span>{{$job->description}}

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            @endforeach
                            {{ $jobs->links("pagination::bootstrap-4") }}

                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>

</div>


<script src="{{ asset('../assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('../assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
<script  type="text/javascript">
    var ChartsFlotcharts = function() {

        return {
            //main function to initiate the module


            initCharts: function() {

                if (!jQuery.plot) {
                    return;
                }

                var data = [];
                var totalPoints = 250;

                // random data generator for plot charts

                function getRandomData() {
                    if (data.length > 0) data = data.slice(1);
                    // do a random walk
                    while (data.length < totalPoints) {
                        var prev = data.length > 0 ? data[data.length - 1] : 50;
                        var y = prev + Math.random() * 10 - 5;
                        if (y < 0) y = 0;
                        if (y > 100) y = 100;
                        data.push(y);
                    }
                    // zip the generated y values with the x values
                    var res = [];
                    for (var i = 0; i < data.length; ++i) {
                        res.push([i, data[i]]);
                    }

                    return res;
                }

                function chart2() {

                    alert(2)
                    if ($('#chart_2').size() != 1) {
                        return;
                    }

                    function randValue() {
                        return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
                    }
                    var pageviews = [
                        [1, randValue()],
                        [2, randValue()],
                        [3, 2 + randValue()],
                        [4, 3 + randValue()],
                        [5, 5 + randValue()],
                        [6, 10 + randValue()],
                        [7, 15 + randValue()],
                        [8, 20 + randValue()],
                        [9, 25 + randValue()],
                        [10, 30 + randValue()],
                        [11, 35 + randValue()],
                        [12, 25 + randValue()],
                        [13, 15 + randValue()],
                        [14, 20 + randValue()],
                        [15, 45 + randValue()],
                        [16, 50 + randValue()],
                        [17, 65 + randValue()],
                        [18, 70 + randValue()],
                        [19, 85 + randValue()],
                        [20, 80 + randValue()],
                        [21, 75 + randValue()],
                        [22, 80 + randValue()],
                        [23, 75 + randValue()],
                        [24, 70 + randValue()],
                        [25, 65 + randValue()],
                        [26, 75 + randValue()],
                        [27, 80 + randValue()],
                        [28, 85 + randValue()],
                        [29, 90 + randValue()],
                        [30, 95 + randValue()]
                    ];
                    var visitors = [
                        [1, randValue() - 5],
                        [2, randValue() - 5],
                        [3, randValue() - 5],
                        [4, 6 + randValue()],
                        [5, 5 + randValue()],
                        [6, 20 + randValue()],
                        [7, 25 + randValue()],
                        [8, 36 + randValue()],
                        [9, 26 + randValue()],
                        [10, 38 + randValue()],
                        [11, 39 + randValue()],
                        [12, 50 + randValue()],
                        [13, 51 + randValue()],
                        [14, 12 + randValue()],
                        [15, 13 + randValue()],
                        [16, 14 + randValue()],
                        [17, 15 + randValue()],
                        [18, 15 + randValue()],
                        [19, 16 + randValue()],
                        [20, 17 + randValue()],
                        [21, 18 + randValue()],
                        [22, 19 + randValue()],
                        [23, 20 + randValue()],
                        [24, 21 + randValue()],
                        [25, 14 + randValue()],
                        [26, 24 + randValue()],
                        [27, 25 + randValue()],
                        [28, 26 + randValue()],
                        [29, 27 + randValue()],
                        [30, 31 + randValue()]
                    ];

                    var plot = $.plot($("#chart_2"), [{
                        data: pageviews,
                        label: "Unique Visits",
                        lines: {
                            lineWidth: 1,
                        },
                        shadowSize: 0

                    }, {
                        data: visitors,
                        label: "Page Views",
                        lines: {
                            lineWidth: 1,
                        },
                        shadowSize: 0
                    }], {
                        series: {
                            lines: {
                                show: true,
                                lineWidth: 2,
                                fill: true,
                                fillColor: {
                                    colors: [{
                                        opacity: 0.05
                                    }, {
                                        opacity: 0.01
                                    }]
                                }
                            },
                            points: {
                                show: true,
                                radius: 3,
                                lineWidth: 1
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#eee",
                            borderColor: "#eee",
                            borderWidth: 1
                        },
                        colors: ["#d12610", "#37b7f3", "#52e136"],
                        xaxis: {
                            ticks: 11,
                            tickDecimals: 0,
                            tickColor: "#eee",
                        },
                        yaxis: {
                            ticks: 11,
                            tickDecimals: 0,
                            tickColor: "#eee",
                        }
                    });


                    function showTooltip(x, y, contents) {
                        $('<div id="tooltip">' + contents + '</div>').css({
                            position: 'absolute',
                            display: 'none',
                            top: y + 5,
                            left: x + 15,
                            border: '1px solid #333',
                            padding: '4px',
                            color: '#fff',
                            'border-radius': '3px',
                            'background-color': '#333',
                            opacity: 0.80
                        }).appendTo("body").fadeIn(200);
                    }

                    var previousPoint = null;
                    $("#chart_2").bind("plothover", function(event, pos, item) {
                        $("#x").text(pos.x.toFixed(2));
                        $("#y").text(pos.y.toFixed(2));

                        if (item) {
                            if (previousPoint != item.dataIndex) {
                                previousPoint = item.dataIndex;

                                $("#tooltip").remove();
                                var x = item.datapoint[0].toFixed(2),
                                    y = item.datapoint[1].toFixed(2);

                                showTooltip(item.pageX, item.pageY, item.series.label + " of " + x + " = " + y);
                            }
                        } else {
                            $("#tooltip").remove();
                            previousPoint = null;
                        }
                    });
                }


                chart2();


            },

        };
    }();

    jQuery(document).ready(function() {
        ChartsFlotcharts.initCharts();

    });
</script>
</body>


