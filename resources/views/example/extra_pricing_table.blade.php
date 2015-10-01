@extends('example.master')
@section('page-title','Pricing Tables')
@section('breadcrumb')
    <li><a>{{Session::get('cur')}}</a> <i class="icon-angle-right"></i></li>
    <li><a>Pricing Tables</a></li>
@stop

@section('content')
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN INLINE NOTIFICATIONS PORTLET-->
            <div class="portlet box yellow">
                <div class="portlet-title">
                    <h4><i class="icon-cogs"></i>Pricing Tables</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row-fluid">
                        <div class="span3">
                            <div class="pricing-table">
                                <h3>Basic</h3>
                                <div class="desc">
                                    Duis mollis, est non commodo luctus, nisi erat
                                    porttitor ligula, eget lacinia odio sem nec elit.
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> 10 Email Accounts</li>
                                    <li><i class="icon-angle-right"></i> 10 User Accounts</li>
                                    <li><i class="icon-angle-right"></i> 100 GB Storage</li>
                                    <li><i class="icon-angle-right"></i> 24X7 Support</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                </ul>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Monthly
                                        </div>
                                        <div class="amount ">
                                            99
                                        </div>
                                    </div>
                                    <a href="#" class="btn green">
                                        Sign Up <i class="m-icon-swapright m-icon-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="spance10 visible-phone"></div>
                        <div class="span3">
                            <div class="pricing-table">
                                <h3>Standard</h3>
                                <div class="desc">
                                    Duis mollis, est non commodo luctus, nisi erat
                                    porttitor ligula, eget lacinia odio sem nec elit.
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> 100 Email Accounts</li>
                                    <li><i class="icon-angle-right"></i> 100 User Accounts</li>
                                    <li><i class="icon-angle-right"></i> 1 TB Storage</li>
                                    <li><i class="icon-angle-right"></i> 24X7 Support</li>
                                    <li><i class="icon-angle-right"></i> Full Backup</li>
                                    <li><i class="icon-angle-right"></i> Free Setup</li>
                                    <li>&nbsp;</li>
                                </ul>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Monthly
                                        </div>
                                        <div class="amount ">
                                            299
                                        </div>
                                    </div>
                                    <a href="#" class="btn green">
                                        Sign Up <i class="m-icon-swapright m-icon-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="spance10 visible-phone"></div>
                        <div class="span3">
                            <div class="pricing-table selected">
                                <h3>Professional</h3>
                                <div class="desc">
                                    Duis mollis, est non commodo luctus, nisi erat
                                    porttitor ligula, eget lacinia odio sem nec elit.
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> Unlimited Email Accounts</li>
                                    <li><i class="icon-angle-right"></i> Unlimited User Accounts</li>
                                    <li><i class="icon-angle-right"></i> 10 TB Storage</li>
                                    <li><i class="icon-angle-right"></i> 24X7 Support</li>
                                    <li><i class="icon-angle-right"></i> Full Backup</li>
                                    <li><i class="icon-angle-right"></i> Free Setup</li>
                                    <li><i class="icon-angle-right"></i> Free CDN</li>
                                </ul>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Monthly
                                        </div>
                                        <div class="amount ">
                                            399
                                        </div>
                                    </div>
                                    <a href="#" class="btn yellow">
                                        Sign Up <i class="m-icon-swapright m-icon-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="spance10 visible-phone"></div>
                        <div class="span3">
                            <div class="pricing-table">
                                <h3>Enterprise</h3>
                                <div class="desc">
                                    Duis mollis, est non commodo luctus, nisi erat
                                    porttitor ligula, eget lacinia odio sem nec elit.
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> Unlimited Email Accounts</li>
                                    <li><i class="icon-angle-right"></i> Unlimited User Accounts</li>
                                    <li><i class="icon-angle-right"></i> Unlimited Storage</li>
                                    <li><i class="icon-angle-right"></i> 24X7 Support</li>
                                    <li><i class="icon-angle-right"></i> Full Backup</li>
                                    <li><i class="icon-angle-right"></i> Free Setup</li>
                                    <li><i class="icon-angle-right"></i> Free CDN</li>
                                </ul>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Monthly
                                        </div>
                                        <div class="amount ">
                                            999
                                        </div>
                                    </div>
                                    <a href="#" class="btn green">
                                        Sign Up <i class="m-icon-swapright m-icon-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END INLINE NOTIFICATIONS PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN INLINE NOTIFICATIONS PORTLET-->
            <div class="portlet">
                <div class="portlet-title">
                    <h4><i class="icon-cogs"></i>Pricing Tables</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row-fluid">
                        <div class="span3">
                            <div class="pricing-table2">
                                <h3>Basic</h3>
                                <div class="desc">
                                    Duis mollis, est non commodo luctus, nisi erat
                                    porttitor ligula, eget lacinia odio sem nec elit.
                                </div>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Monthly
                                        </div>
                                        <div class="amount ">
                                            99
                                        </div>
                                    </div>
                                    <a href="#" class="btn">
                                        Sign Up <i class="m-icon-swapright"></i>
                                    </a>
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> 10 Email Accounts</li>
                                    <li><i class="icon-angle-right"></i> 10 User Accounts</li>
                                    <li><i class="icon-angle-right"></i> 100 GB Storage</li>
                                    <li><i class="icon-angle-right"></i> 24X7 Support</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                </ul>
                            </div>
                        </div>
                        <div class="spance10 visible-phone"></div>
                        <div class="span3">
                            <div class="pricing-table2">
                                <h3>Standard</h3>
                                <div class="desc">
                                    Duis mollis, est non commodo luctus, nisi erat
                                    porttitor ligula, eget lacinia odio sem nec elit.
                                </div>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Monthly
                                        </div>
                                        <div class="amount ">
                                            299
                                        </div>
                                    </div>
                                    <a href="#" class="btn">
                                        Sign Up <i class="m-icon-swapright"></i>
                                    </a>
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> 100 Email Accounts</li>
                                    <li><i class="icon-angle-right"></i> 100 User Accounts</li>
                                    <li><i class="icon-angle-right"></i> 1 TB Storage</li>
                                    <li><i class="icon-angle-right"></i> 24X7 Support</li>
                                    <li><i class="icon-angle-right"></i> Full Backup</li>
                                    <li><i class="icon-angle-right"></i> Free Setup</li>
                                    <li>&nbsp;</li>
                                </ul>
                            </div>
                        </div>
                        <div class="spance10 visible-phone"></div>
                        <div class="span3">
                            <div class="pricing-table2 selected">
                                <h3>Professional</h3>
                                <div class="desc">
                                    Duis mollis, est non commodo luctus, nisi erat
                                    porttitor ligula, eget lacinia odio sem nec elit.
                                </div>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Monthly
                                        </div>
                                        <div class="amount ">
                                            399
                                        </div>
                                    </div>
                                    <a href="#" class="btn green">
                                        Sign Up <i class="m-icon-swapright m-icon-white"></i>
                                    </a>
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> Unlimited Email Accounts</li>
                                    <li><i class="icon-angle-right"></i> Unlimited User Accounts</li>
                                    <li><i class="icon-angle-right"></i> 10 TB Storage</li>
                                    <li><i class="icon-angle-right"></i> 24X7 Support</li>
                                    <li><i class="icon-angle-right"></i> Full Backup</li>
                                    <li><i class="icon-angle-right"></i> Free Setup</li>
                                    <li><i class="icon-angle-right"></i> Free CDN</li>
                                </ul>
                            </div>
                        </div>
                        <div class="spance10 visible-phone"></div>
                        <div class="span3">
                            <div class="pricing-table2">
                                <h3>Enterprise</h3>
                                <div class="desc">
                                    Duis mollis, est non commodo luctus, nisi erat
                                    porttitor ligula, eget lacinia odio sem nec elit.
                                </div>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Monthly
                                        </div>
                                        <div class="amount ">
                                            999
                                        </div>
                                    </div>
                                    <a href="#" class="btn ">
                                        Sign Up <i class="m-icon-swapright"></i>
                                    </a>
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> Unlimited Email Accounts</li>
                                    <li><i class="icon-angle-right"></i> Unlimited User Accounts</li>
                                    <li><i class="icon-angle-right"></i> Unlimited Storage</li>
                                    <li><i class="icon-angle-right"></i> 24X7 Support</li>
                                    <li><i class="icon-angle-right"></i> Full Backup</li>
                                    <li><i class="icon-angle-right"></i> Free Setup</li>
                                    <li><i class="icon-angle-right"></i> Free CDN</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END INLINE NOTIFICATIONS PORTLET-->
        </div>
    </div>
    @stop

@section('initial_js')
    jQuery(document).ready(function() {
    App.init(); // init the rest of plugins and elements
    });
@stop