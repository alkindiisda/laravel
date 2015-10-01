@extends('example.master')
@section('page-title','Search Results')
@section('breadcrumb')
    <li><a>{{Session::get('cur')}}</a> <i class="icon-angle-right"></i></li>
    <li><a>Search Results</a></li>
@stop

@section('content')
    <div class="row-fluid profile">
        <div class="tabbable tabbable-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab_1_2">Project Search</a></li>
                <li><a data-toggle="tab" href="#tab_1_3">Classic Search</a></li>
                <li><a data-toggle="tab" href="#tab_1_4">Company Search</a></li>
                <li><a data-toggle="tab" href="#tab_1_5">User Search </a></li>
            </ul>
            <div class="tab-content">
                <div id="tab_1_2" class="tab-pane active">
                    <div class="row-fluid search-forms search-default">
                        <form class="form-search" action="#">
                            <div class="chat-form">
                                <div class="input-cont">
                                    <input type="text" placeholder="Search..." class="m-wrap" />
                                </div>
                                <button type="button" class="btn green">Search &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="row-fluid portfolio-block">
                        <div class="span5 portfolio-text">
                            <img src="assets/img/profile/portfolio/logo_metronic.jpg" alt="" />
                            <div class="portfolio-text-info">
                                <h4>Metronic - Responsive Template</h4>
                                <p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="span5">
                            <div class="portfolio-info">
                                Today Sold
                                <span>187</span>
                            </div>
                            <div class="portfolio-info">
                                Total Sold
                                <span>1789</span>
                            </div>
                            <div class="portfolio-info">
                                Earnings
                                <span>$37.240</span>
                            </div>
                        </div>
                        <div class="span2 portfolio-btn">
                            <a href="#" class="btn bigicn-only"><span>View</span></a>
                        </div>
                    </div>
                    <div class="row-fluid portfolio-block">
                        <div class="span5 portfolio-text">
                            <img src="assets/img/profile/portfolio/logo_azteca.jpg" alt="" />
                            <div class="portfolio-text-info">
                                <h4>Metronic - Responsive Template</h4>
                                <p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="span5">
                            <div class="portfolio-info">
                                Today Sold
                                <span>24</span>
                            </div>
                            <div class="portfolio-info">
                                Total Sold
                                <span>660</span>
                            </div>
                            <div class="portfolio-info">
                                Earnings
                                <span>$7.060</span>
                            </div>
                        </div>
                        <div class="span2 portfolio-btn">
                            <a href="#" class="btn bigicn-only"><span>View</span></a>
                        </div>
                    </div>
                    <div class="row-fluid portfolio-block">
                        <div class="span5 portfolio-text">
                            <img src="assets/img/profile/portfolio/logo_conquer.jpg" alt="" />
                            <div class="portfolio-text-info">
                                <h4>Metronic - Responsive Template</h4>
                                <p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="span5">
                            <div class="portfolio-info">
                                Today Sold
                                <span>24</span>
                            </div>
                            <div class="portfolio-info">
                                Total Sold
                                <span>975</span>
                            </div>
                            <div class="portfolio-info">
                                Earnings
                                <span>$21.700</span>
                            </div>
                        </div>
                        <div class="span2 portfolio-btn">
                            <a href="#" class="btn bigicn-only"><span>View</span></a>
                        </div>
                    </div>
                    <div class="row-fluid portfolio-block">
                        <div class="span5 portfolio-text">
                            <img src="assets/img/profile/portfolio/logo_azteca.jpg" alt="" />
                            <div class="portfolio-text-info">
                                <h4>Metronic - Responsive Template</h4>
                                <p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="span5">
                            <div class="portfolio-info">
                                Today Sold
                                <span>24</span>
                            </div>
                            <div class="portfolio-info">
                                Total Sold
                                <span>975</span>
                            </div>
                            <div class="portfolio-info">
                                Earnings
                                <span>$21.700</span>
                            </div>
                        </div>
                        <div class="span2 portfolio-btn">
                            <a href="#" class="btn bigicn-only"><span>View</span></a>
                        </div>
                    </div>
                    <div class="row-fluid portfolio-block">
                        <div class="span5 portfolio-text">
                            <img src="assets/img/profile/portfolio/logo_conquer.jpg" alt="" />
                            <div class="portfolio-text-info">
                                <h4>Metronic - Responsive Template</h4>
                                <p>Lorem ipsum dolor sit consectetuer adipiscing elit .</p>
                            </div>
                        </div>
                        <div class="span5">
                            <div class="portfolio-info">
                                Today Sold
                                <span>24</span>
                            </div>
                            <div class="portfolio-info">
                                Total Sold
                                <span>975</span>
                            </div>
                            <div class="portfolio-info">
                                Earnings
                                <span>$21.700</span>
                            </div>
                        </div>
                        <div class="span2 portfolio-btn">
                            <a href="#" class="btn bigicn-only"><span>View</span></a>
                        </div>
                    </div>
                    <div class="row-fluid portfolio-block">
                        <div class="span5 portfolio-text">
                            <img src="assets/img/profile/portfolio/logo_azteca.jpg" alt="" />
                            <div class="portfolio-text-info">
                                <h4>Metronic - Responsive Template</h4>
                                <p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="span5">
                            <div class="portfolio-info">
                                Today Sold
                                <span>24</span>
                            </div>
                            <div class="portfolio-info">
                                Total Sold
                                <span>975</span>
                            </div>
                            <div class="portfolio-info">
                                Earnings
                                <span>$21.700</span>
                            </div>
                        </div>
                        <div class="span2 portfolio-btn">
                            <a href="#" class="btn bigicn-only"><span>View</span></a>
                        </div>
                    </div>
                    <div class="space5"></div>
                    <div class="pagination pagination-right">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
                <!--end tab-pane-->
                <div id="tab_1_3" class="tab-pane">
                    <div class="row-fluid search-forms search-default">
                        <form class="form-search" action="#">
                            <div class="chat-form">
                                <div class="input-cont">
                                    <input type="text" placeholder="Search..." class="m-wrap" />
                                </div>
                                <button type="button" class="btn green">Search &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="search-classic">
                        <h4><a href="#">Metronic - Responsive Admin Dashboard Template</a></h4>
                        <a href="#">http://www.keenthemes.com</a>
                        <p>Metronic is a responsive admin dashboard template powered with Twitter Bootstrap Framework for admin and backend applications. Metronic has a clean and intuitive metro style design which makes your next project look awesome and yet user friendly..</p>
                    </div>
                    <div class="search-classic">
                        <h4><a href="#">Conquer - Responsive Admin Dashboard Template</a></h4>
                        <a href="#">http://www.keenthemes.com</a>
                        <p>Conquer is a responsive admin dashboard template created mainly for admin and backend applications(CMS, CRM, Custom Admin Application, Admin Dashboard). Conquer template powered with Twitter Bootstrap Framework..</p>
                    </div>
                    <div class="search-classic">
                        <h4><a href="#">Metronic - Responsive Admin Dashboard Template</a></h4>
                        <a href="#">http://www.keenthemes.com</a>
                        <p>Metronic is a responsive admin dashboard template powered with Twitter Bootstrap Framework for admin and backend applications. Metronic has a clean and intuitive metro style design which makes your next project look awesome and yet user friendly..</p>
                    </div>
                    <div class="search-classic">
                        <h4><a href="#">Conquer - Responsive Admin Dashboard Template</a></h4>
                        <a href="#">http://www.keenthemes.com</a>
                        <p>Conquer is a responsive admin dashboard template created mainly for admin and backend applications(CMS, CRM, Custom Admin Application, Admin Dashboard). Conquer template powered with Twitter Bootstrap Framework..</p>
                    </div>
                    <div class="search-classic">
                        <h4><a href="#">Conquer - Responsive Admin Dashboard Template</a></h4>
                        <a href="#">http://www.keenthemes.com</a>
                        <p>Conquer is a responsive admin dashboard template created mainly for admin and backend applications(CMS, CRM, Custom Admin Application, Admin Dashboard). Conquer template powered with Twitter Bootstrap Framework..</p>
                    </div>
                    <div class="search-classic">
                        <h4><a href="#">Metronic - Responsive Admin Dashboard Template</a></h4>
                        <a href="#">http://www.keenthemes.com</a>
                        <p>Metronic is a responsive admin dashboard template powered with Twitter Bootstrap Framework for admin and backend applications. Metronic has a clean and intuitive metro style design which makes your next project look awesome and yet user friendly..</p>
                    </div>
                    <div class="search-classic">
                        <h4><a href="#">Conquer - Responsive Admin Dashboard Template</a></h4>
                        <a href="#">http://www.keenthemes.com</a>
                        <p>Conquer is a responsive admin dashboard template created mainly for admin and backend applications(CMS, CRM, Custom Admin Application, Admin Dashboard). Conquer template powered with Twitter Bootstrap Framework..</p>
                    </div>
                    <div class="space5"></div>
                    <div class="pagination pagination-centered">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
                <!--end tab-pane-->
                <div id="tab_1_4" class="tab-pane">
                    <div class="row-fluid search-forms search-default">
                        <form class="form-search" action="#">
                            <div class="chat-form">
                                <div class="input-cont">
                                    <input type="text" placeholder="Search..." class="m-wrap" />
                                </div>
                                <button type="button" class="btn green">Search &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="portlet-body" style="display: block;">
                        <table class="table table-striped table-bordered table-advance table-hover">
                            <thead>
                            <tr>
                                <th><i class="icon-briefcase"></i> Company</th>
                                <th class="hidden-phone"><i class="icon-question-sign"></i> Descrition</th>
                                <th><i class="icon-bookmark"></i> Amount</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="#">Pixel Ltd</a></td>
                                <td class="hidden-phone">Server hardware purchase</td>
                                <td>52560.10$ <span class="label label-success label-mini">Paid</span></td>
                                <td><a class="btn mini green-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        Smart House
                                    </a>
                                </td>
                                <td class="hidden-phone">Office furniture purchase</td>
                                <td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>
                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        FoodMaster Ltd
                                    </a>
                                </td>
                                <td class="hidden-phone">Company Anual Dinner Catering</td>
                                <td>12400.00$ <span class="label label-success label-mini">Paid</span></td>
                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        WaterPure Ltd
                                    </a>
                                </td>
                                <td class="hidden-phone">Payment for Jan 2013</td>
                                <td>610.50$ <span class="label label-danger label-mini">Overdue</span></td>
                                <td><a class="btn mini red-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        Smart House
                                    </a>
                                </td>
                                <td class="hidden-phone">Office furniture purchase</td>
                                <td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>
                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        FoodMaster Ltd
                                    </a>
                                </td>
                                <td class="hidden-phone">Company Anual Dinner Catering</td>
                                <td>12400.00$ <span class="label label-success label-mini">Paid</span></td>
                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        WaterPure Ltd
                                    </a>
                                </td>
                                <td class="hidden-phone">Payment for Jan 2013</td>
                                <td>610.50$ <span class="label label-danger label-mini">Overdue</span></td>
                                <td><a class="btn mini red-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">Pixel Ltd</a></td>
                                <td class="hidden-phone">Server hardware purchase</td>
                                <td>52560.10$ <span class="label label-success label-mini">Paid</span></td>
                                <td><a class="btn mini green-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        Smart House
                                    </a>
                                </td>
                                <td class="hidden-phone">Office furniture purchase</td>
                                <td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>
                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        FoodMaster Ltd
                                    </a>
                                </td>
                                <td class="hidden-phone">Company Anual Dinner Catering</td>
                                <td>12400.00$ <span class="label label-success label-mini">Paid</span></td>
                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">Pixel Ltd</a></td>
                                <td class="hidden-phone">Server hardware purchase</td>
                                <td>52560.10$ <span class="label label-success label-mini">Paid</span></td>
                                <td><a class="btn mini green-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        Smart House
                                    </a>
                                </td>
                                <td class="hidden-phone">Office furniture purchase</td>
                                <td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>
                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        FoodMaster Ltd
                                    </a>
                                </td>
                                <td class="hidden-phone">Company Anual Dinner Catering</td>
                                <td>12400.00$ <span class="label label-success label-mini">Paid</span></td>
                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="space5"></div>
                    <div class="pagination pagination-right">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
                <!--end tab-pane-->
                <div id="tab_1_5" class="tab-pane">
                    <div class="row-fluid search-forms search-default">
                        <form class="form-search" action="#">
                            <div class="chat-form">
                                <div class="input-cont">
                                    <input type="text" placeholder="Search..." class="m-wrap" />
                                </div>
                                <button type="button" class="btn green">Search &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Photo</th>
                                <th class="hidden-phone">Fullname</th>
                                <th>Username</th>
                                <th class="hidden-phone">Joined</th>
                                <th class="hidden-phone">Points</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="assets/img/avatar1.jpg" alt="" /></td>
                                <td class="hidden-phone">Mark Nilson</td>
                                <td>makr124</td>
                                <td class="hidden-phone">19 Jan 2012</td>
                                <td class="hidden-phone">1245</td>
                                <td><span class="label label-success">Approved</span></td>
                                <td><a class="btn mini red-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/avatar2.jpg" alt="" /></td>
                                <td class="hidden-phone">Filip Rolton</td>
                                <td>jac123</td>
                                <td class="hidden-phone">09 Feb 2012</td>
                                <td class="hidden-phone">15</td>
                                <td><span class="label label-info">Pending</span></td>
                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/avatar3.jpg" alt="" /></td>
                                <td class="hidden-phone">Colin Fox</td>
                                <td>col</td>
                                <td class="hidden-phone">19 Jan 2012</td>
                                <td class="hidden-phone">245</td>
                                <td><span class="label label-warning">Suspended</span></td>
                                <td><a class="btn mini green-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/avatar.png" alt="" /></td>
                                <td class="hidden-phone">Nick Stone</td>
                                <td>sanlim</td>
                                <td class="hidden-phone">11 Mar 2012</td>
                                <td class="hidden-phone">565</td>
                                <td><span class="label label-danger">Blocked</span></td>
                                <td><a class="btn mini red-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/avatar1.jpg" alt="" /></td>
                                <td class="hidden-phone">Edward Cook</td>
                                <td>sanlim</td>
                                <td class="hidden-phone">11 Mar 2012</td>
                                <td class="hidden-phone">45245</td>
                                <td><span class="label label-danger">Blocked</span></td>
                                <td><a class="btn mini green-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/avatar.png" alt="" /></td>
                                <td class="hidden-phone">Nick Stone</td>
                                <td>sanlim</td>
                                <td class="hidden-phone">11 Mar 2012</td>
                                <td class="hidden-phone">24512</td>
                                <td><span class="label label-danger">Blocked</span></td>
                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/avatar1.jpg" alt="" /></td>
                                <td class="hidden-phone">Elis Lim</td>
                                <td>makr124</td>
                                <td class="hidden-phone">11 Mar 2012</td>
                                <td class="hidden-phone">145</td>
                                <td><span class="label label-success">Approved</span></td>
                                <td><a class="btn mini red-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/avatar2.jpg" alt="" /></td>
                                <td class="hidden-phone">King Paul</td>
                                <td>king123</td>
                                <td class="hidden-phone">11 Mar 2012</td>
                                <td class="hidden-phone">456</td>
                                <td><span class="label label-info">Pending</span></td>
                                <td><a class="btn mini blue-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/avatar3.jpg" alt="" /></td>
                                <td class="hidden-phone">Filip Larson</td>
                                <td>fil</td>
                                <td class="hidden-phone">11 Mar 2012</td>
                                <td class="hidden-phone">12453</td>
                                <td><span class="label label-warning">Suspended</span></td>
                                <td><a class="btn mini green-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/avatar.png" alt="" /></td>
                                <td class="hidden-phone">Martin Larson</td>
                                <td>larson12</td>
                                <td class="hidden-phone">01 Apr 2011</td>
                                <td class="hidden-phone">2453</td>
                                <td><span class="label label-danger">Blocked</span></td>
                                <td><a class="btn mini red-stripe" href="#">View</a></td>
                            </tr>
                            <tr>
                                <td><img src="assets/img/avatar1.jpg" alt="" /></td>
                                <td class="hidden-phone">King Paul</td>
                                <td>sanlim</td>
                                <td class="hidden-phone">11 Mar 2012</td>
                                <td class="hidden-phone">905</td>
                                <td><span class="label label-danger">Blocked</span></td>
                                <td><a class="btn mini green-stripe" href="#">View</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="space5"></div>
                    <div class="pagination pagination-right">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
                <!--end tab-pane-->
            </div>
        </div>
        <!--end tabbable-->
    </div>
    @stop

@section('initial_js')
    jQuery(document).ready(function() {
    App.init(); // init the rest of plugins and elements
    });
@stop