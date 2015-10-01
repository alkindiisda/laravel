@extends('example.master')
@section('page-title','Google Maps')
@section('breadcrumb')
    <li><a>Maps</a> <i class="icon-angle-right"></i></li>
    <li><a>Google Maps</a></li>
@stop
@section('content')
    <div class="row-fluid">
        <div class="span6">
            <!-- BEGIN BASIC PORTLET-->
            <div class="portlet solid blue">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Basic</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="gmap_basic" class="gmaps"></div>
                </div>
            </div>
            <!-- END BASIC PORTLET-->
        </div>
        <div class="span6">
            <!-- BEGIN MARKERS PORTLET-->
            <div class="portlet solid yellow">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Markers</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="gmap_marker" class="gmaps"></div>
                </div>
            </div>
            <!-- END MARKERS PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <!-- BEGIN GEOLOCATION PORTLET-->
            <div class="portlet">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Geolocation</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="label label-important visible-ie8">Not supported in Internet Explorer 8</div>
                    <div id="gmap_geo" class="gmaps"></div>
                </div>
            </div>
            <!-- END GEOLOCATION PORTLET-->
        </div>
        <div class="span6">
            <!-- BEGIN POLYLINES PORTLET-->
            <div class="portlet">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Polylines</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="gmap_polylines" class="gmaps"></div>
                </div>
            </div>
            <!-- END POLYLINES PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <!-- BEGIN POLYGONS PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Polygons</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="label label-important visible-ie8">Not supported in Internet Explorer 8</div>
                    <div id="gmap_polygons" class="gmaps">
                    </div>
                </div>
            </div>
            <!-- END POLYGONS PORTLET-->
        </div>
        <div class="span6">
            <!-- BEGIN STATIC PORTLET-->
            <div class="portlet box grey">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Static</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="gmap_static" class="gmaps">
                        <div style="height:100%;overflow:hidden;display:block;background: url(http://maps.googleapis.com/maps/api/staticmap?center=48.858271,2.294264&amp;size=640x300&amp;sensor=true&amp;zoom=5) no-repeat 50% 50%;">
                            <img src="http://maps.googleapis.com/maps/api/staticmap?center=48.858271,2.294264&amp;size=640x300&amp;sensor=true&amp;zoom=16" style="visibility:hidden" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- END STATIC PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <!-- BEGIN ROUTES PORTLET-->
            <div class="portlet box purple">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Routes</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <form class="form-inline" action="#">
                        <input type="button" id="gmap_routes_start" class="btn green" value="Start Routing" />
                    </form>
                    <div class="label label-important visible-ie8">Not supported in Internet Explorer 8</div>
                    <div id="gmap_routes" class="gmaps">
                    </div>
                    <ol id="gmap_routes_instructions">
                    </ol>
                </div>
            </div>
            <!-- END ROUTES PORTLET-->
        </div>
        <div class="span6">
            <!-- BEGIN GEOCODING PORTLET-->
            <div class="portlet box red">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Geocoding</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <form class="form-inline" action="#">
                        <input type="text" id="gmap_geocoding_address" class="m-wrap medium" placeholder="Address..." />
                        <input type="button" id="gmap_geocoding_btn" class="btn" value="Search" />
                    </form>
                    <div id="gmap_geocoding" class="gmaps">
                    </div>
                </div>
            </div>
            <!-- END GEOCODING PORTLET-->
        </div>
    </div>
    @stop
@section('initial_js')
		jQuery(document).ready(function() {		
			App.init();
			DemoGMaps.init();
		});
@stop

@section('js')
    <script src="assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/demo.gmaps.js"></script>

@stop