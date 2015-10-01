@extends('example.master')
@section('page-title','Visual Chart Example')
@section('breadcrumb')
    <li><a>{{Session::get('cur')}}</a> <i class="icon-angle-right"></i></li>
    <li><a>Visual Chart Example</a></li>
@stop
@section('content')
    <!-- BEGIN CHART PORTLETS-->
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN BASIC CHART PORTLET-->
            <div class="portlet box yellow">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Basic Chart</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_1" class="chart"></div>
                </div>
            </div>
            <!-- END BASIC CHART PORTLET-->
            <!-- BEGIN TRACKING CURVES PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Tracking Curves</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_3" class="chart"></div>
                </div>
            </div>
            <!-- END TRACKING CURVES PORTLET-->
            <!-- BEGIN DYNAMIC CHART PORTLET-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Dynamic Chart</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_4" class="chart"></div>
                </div>
            </div>
            <!-- END DYNAMIC CHART PORTLET-->
            <!-- BEGIN STACK CHART CONTROLS PORTLET-->
            <div class="portlet box yellow">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Stack Chart Controls</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_5" style="height:350px;"></div>
                    <div class="btn-toolbar">
                        <div class="btn-group stackControls">
                            <input type="button" class="btn blue" value="With stacking" />
                            <input type="button" class="btn red" value="Without stacking" />
                        </div>
                        <div class="space5"></div>
                        <div class="btn-group graphControls">
                            <input type="button" class="btn" value="Bars" />
                            <input type="button" class="btn" value="Lines" />
                            <input type="button" class="btn" value="Lines with steps" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- END STACK CHART CONTROLS PORTLET-->
            <!-- BEGIN INTERACTIVE CHART PORTLET-->
            <div class="portlet box red">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Interactive Chart</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_2" class="chart"></div>
                </div>
            </div>
            <!-- END INTERACTIVE CHART PORTLET-->
        </div>
    </div>
    <!-- END CHART PORTLETS-->
    <!-- BEGIN PIE CHART PORTLET-->
    <div class="row-fluid">
        <div class="span6">
            <div class="portlet box yellow">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Pie Chart</h4>
                    <div class="tools">
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="graph_1" class="chart"></div>
                </div>
            </div>
            <div class="portlet box purple">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Pie Chart</h4>
                    <div class="tools">
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="graph_2" class="chart"></div>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Interactive Chart</h4>
                    <div class="tools">
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="graph_3" class="chart"></div>
                </div>
            </div>
            <div class="portlet box red">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Donut Chart</h4>
                    <div class="tools">
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="graph_4" class="chart"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PIE CHART PORTLET-->
    @stop
@section('initial_js')
    jQuery(document).ready(function() {
    App.setPage('charts');
    App.init(); // init the rest of plugins and elements
    });
@stop

@section('js')
    <script src="assets/flot/jquery.flot.js"></script>
    <script src="assets/flot/jquery.flot.resize.js"></script>
    <script src="assets/flot/jquery.flot.pie.js"></script>
    <script src="assets/flot/jquery.flot.stack.js"></script>
    <script src="assets/flot/jquery.flot.crosshair.js"></script>

@stop

