@extends('example.master')
@section('page-title','Assign Menu')
@section('breadcrumb')
    <li><a>{{Session::get('cur')}}</a> <i class="icon-angle-right"></i></li>
    <li><a>Assign Menu</a></li>
@stop

@section('content')
    <div class="row-fluid">
        <div class="span12">

            <div class="portlet box blue" id="form_assign_menu">
                <div class="portlet-title">
                    <h4>
                        <i class="icon-reorder"></i> Menu Management - <span class="step-title">Step 1 of 3</span>
                    </h4>
                    <div class="tools hidden-phone">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="#" class="form-horizontal">
                        <div class="form-wizard">
                            <div class="navbar steps">
                                <div class="navbar-inner">
                                    <ul class="row-fluid">
                                        <li class="span3">
                                            <a href="#tab1" data-toggle="tab" class="step active">
                                                <span class="number">1</span>
                                                <span class="desc"><i class="icon-ok"></i> Choose Role</span>
                                            </a>
                                        </li>
                                        <li class="span3">
                                            <a href="#tab2" data-toggle="tab" class="step">
                                                <span class="number">2</span>
                                                <span class="desc"><i class="icon-ok"></i> Menu Setup</span>
                                            </a>
                                        </li>
                                        <li class="span3">
                                            <a href="#tab3" data-toggle="tab" class="step">
                                                <span class="number">3</span>
                                                <span class="desc"><i class="icon-ok"></i> Confirm</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="bar" class="progress progress-success progress-striped">
                                <div class="bar"></div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <h3 class="block">Choose a role to manage</h3>
                                    <div class="control-group">
                                        <label class="control-label">Role Type</label>
                                        <div class="controls">

                                                {!!$inputRole!!}

                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane" id="tab2">
                                    <h3 class="block">Check to assign menu</h3>
                                    <div id="menuForRole"></div>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <h3 class="block">Confirm your choice</h3>
                                    <div id="confirmation"></div>

                                </div>
                            </div>
                            <div class="form-actions clearfix">
                                <a href="javascript:;" class="btn button-previous">
                                    <i class="m-icon-swapleft"></i> Back
                                </a>
                                <a href="javascript:;" class="btn blue button-next">
                                    Continue <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                                <a href="javascript:;" class="btn green button-submit">
                                    Submit <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @stop
@section('initial_js')
    jQuery(document).ready(function() {

    App.init(); // init the rest of plugins and elements
    });

@stop

@section('js')
    <script src="assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="assets/js/menu_management.js"></script>

@stop