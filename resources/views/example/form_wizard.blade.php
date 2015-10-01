@extends('example.master')
@section('page-title','Form Wizard')
@section('breadcrumb')
    <li><a>Form Stuff</a> <i class="icon-angle-right"></i></li>
    <li><a>Form Wizard</a></li>
@stop

@section('content')
    <div class="row-fluid">
        <div class="span12">
            <div class="portlet box blue" id="form_wizard_1">
                <div class="portlet-title">
                    <h4>
                        <i class="icon-reorder"></i> Form Wizard - <span class="step-title">Step 1 of 4</span>
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
                                                <span class="desc"><i class="icon-ok"></i> Account Setup</span>
                                            </a>
                                        </li>
                                        <li class="span3">
                                            <a href="#tab2" data-toggle="tab" class="step">
                                                <span class="number">2</span>
                                                <span class="desc"><i class="icon-ok"></i> Profile Setup</span>
                                            </a>
                                        </li>
                                        <li class="span3">
                                            <a href="#tab3" data-toggle="tab" class="step">
                                                <span class="number">3</span>
                                                <span class="desc"><i class="icon-ok"></i> Billing Setup</span>
                                            </a>
                                        </li>
                                        <li class="span3">
                                            <a href="#tab4" data-toggle="tab" class="step">
                                                <span class="number">4</span>
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
                                    <h3 class="block">Provide your account details</h3>
                                    <div class="control-group">
                                        <label class="control-label">Username</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" />
                                            <span class="help-inline">Provide your username</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Password</label>
                                        <div class="controls">
                                            <input type="password" class="span6 m-wrap" />
                                            <span class="help-inline">Provide your username</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Confirm Password</label>
                                        <div class="controls">
                                            <input type="password" class="span6 m-wrap" />
                                            <span class="help-inline">Confirm your password</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <h3 class="block">Provide your profile details</h3>
                                    <div class="control-group">
                                        <label class="control-label">Fullname</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" />
                                            <span class="help-inline">Provide your fullname</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" />
                                            <span class="help-inline">Provide your email address</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Phone Number</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" />
                                            <span class="help-inline">Provide your phone number</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Gender</label>
                                        <div class="controls">
                                            <label class="radio">
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />
                                                Male
                                            </label>
                                            <div class="clearfix"></div>
                                            <label class="radio">
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Address</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" />
                                            <span class="help-inline">Provide your street address</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">City/Town</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" />
                                            <span class="help-inline">Provide your city or town</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Remarks</label>
                                        <div class="controls">
                                            <textarea class="span6 m-wrap" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <h3 class="block">Provide your billing and credit card details</h3>
                                    <div class="control-group">
                                        <label class="control-label">Card Holder Name</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" />
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Bank Name</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" />
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Debit/Credit Card Number</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" />
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">CVC</label>
                                        <div class="controls">
                                            <input type="text" placeholder="" class="m-wrap" />
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Expiration Date(MM/YYYY)</label>
                                        <div class="controls">
                                            <input type="text" placeholder="MM" class="m-wrap small" />
                                            <input type="text" placeholder="YYYY" class="m-wrap small" />
                                            <span class="help-inline"></span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Payment Options</label>
                                        <div class="controls">
                                            <label class="checkbox line">
                                                <input type="checkbox" value="" /> Auto-Pay with this Credit Card
                                            </label>
                                            <label class="checkbox line">
                                                <input type="checkbox" value="" /> Email me monthly billing
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab4">
                                    <h3 class="block">Confirm your account</h3>
                                    <div class="control-group">
                                        <label class="control-label">Fullname:</label>
                                        <div class="controls">
                                            <span class="text">Bob Nilson</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email:</label>
                                        <div class="controls">
                                            <span class="text">bob@nilson.com</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Phone:</label>
                                        <div class="controls">
                                            <span class="text">101234023223</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Credit Card Number:</label>
                                        <div class="controls">
                                            <span class="text">*************1233</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label"></label>
                                        <div class="controls">
                                            <label class="checkbox">
                                                <input type="checkbox" value="" /> I confirm my account
                                            </label>
                                        </div>
                                    </div>
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

@stop