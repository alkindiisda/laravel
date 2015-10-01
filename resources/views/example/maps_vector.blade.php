@extends('example.master')
@section('page-title','Vector Maps')
@section('breadcrumb')
    <li><a>Maps</a> <i class="icon-angle-right"></i></li>
    <li><a>Vector Maps</a></li>
@stop

@section('content')
    <div class="row-fluid">
        <div class="span6">
            <!-- BEGIN WORLD PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>World</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="vmap_world" class="vmaps"></div>
                </div>
            </div>
            <!-- END WORLD PORTLET-->
        </div>
        <div class="span6">
            <!-- BEGIN USA PORTLET-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>USA</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="vmap_usa" class="vmaps "></div>
                </div>
            </div>
            <!-- END USA PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <!-- BEGIN EUROPE PORTLET-->
            <div class="portlet box grey">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Europe</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="vmap_europe" class="vmaps"></div>
                </div>
            </div>
            <!-- END EUROPE PORTLET-->
        </div>
        <div class="span6">
            <!-- BEGIN RUSSIA PORTLET-->
            <div class="portlet box purple">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Russia</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="vmap_russia" class="vmaps "></div>
                </div>
            </div>
            <!-- END RUSSIA PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <!-- BEGIN GERMANY PORTLET-->
            <div class="portlet box yellow">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Germany</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="vmap_germany" class="vmaps"></div>
                </div>
            </div>
            <!-- END GERMANY PORTLET-->
        </div>
    </div>
    @stop

@section('initial_js')
    jQuery(document).ready(function() {
    App.setPage('maps_vector')
    App.init();
    });
@stop

@section('js')
    <script src="assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>

@stop

@section('css')
    <link href="assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />

@stop