@extends('example.master')
@section('page-title','Advance Form Sample')
@section('breadcrumb')
    <li><a>Form Stuff</a> <i class="icon-angle-right"></i></li>
    <li><a>Advance Form Sample</a></li>
@stop
@section('content')
    <div class="row-fluid">
        <div class="span12">
            <div class="tabbable tabbable-custom boxless">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">2 Columns</a></li>
                    <li><a class="advance_form_with_chosen_element" href="#tab_2" data-toggle="tab">2 Columns Horizontal</a></li>
                    <li><a href="#tab_3" data-toggle="tab">2 Columns View Only</a></li>
                    <li><a class="advance_form_with_chosen_element" href="#tab_4" data-toggle="tab">Row Seperated</a></li>
                    <li><a class="advance_form_with_chosen_element" href="#tab_5" data-toggle="tab">Bordered</a></li>
                    <li><a class="advance_form_with_chosen_element" href="#tab_6" data-toggle="tab">Bordered & Row Stripped</a></li>
                    <li><a class="advance_form_with_chosen_element" href="#tab_7" data-toggle="tab">Bordered & Label Stripped</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <h4><i class="icon-reorder"></i>Form Sample</h4>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="horizontal-form">
                                    <h3 class="form-section">Person Info</h3>
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" for="firstName">First Name</label>
                                                <div class="controls">
                                                    <input type="text" id="firstName" class="m-wrap span12" placeholder="Chee Kin">
                                                    <span class="help-block">This is inline help</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group error">
                                                <label class="control-label" for="lastName">Last Name</label>
                                                <div class="controls">
                                                    <input type="text" id="lastName" class="m-wrap span12" placeholder="Lim">
                                                    <span class="help-block">This field has error.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >Gender</label>
                                                <div class="controls">
                                                    <select  class="m-wrap span12">
                                                        <option value="">Male</option>
                                                        <option value="">Female</option>
                                                    </select>
                                                    <span class="help-block">Select your gender.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >Date of Birth</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap span12"  placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >Category</label>
                                                <div class="controls">
                                                    <select class="span12 chosen" data-placeholder="Choose a Category" tabindex="1">
                                                        <option value=""></option>
                                                        <option value="Category 1">Category 1</option>
                                                        <option value="Category 2">Category 2</option>
                                                        <option value="Category 3">Category 5</option>
                                                        <option value="Category 4">Category 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >Membership</label>
                                                <div class="controls">
                                                    <label class="radio">
                                                        <input type="radio" name="optionsRadios2" value="option1" />
                                                        Free
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="optionsRadios2" value="option2" checked />
                                                        Professional
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <h3 class="form-section">Address</h3>
                                    <div class="row-fluid">
                                        <div class="span12 ">
                                            <div class="control-group">
                                                <label class="control-label" >Street</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap span12" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >City</label>
                                                <div class="controls">
                                                    <input type="text"  class="m-wrap span12">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >State</label>
                                                <div class="controls">
                                                    <input type="text"  class="m-wrap span12">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >Post Code</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap span12">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >Country</label>
                                                <div class="controls">
                                                    <select  class="m-wrap span12"></select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                        <button type="button" class="btn">Cancel</button>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="tab_2">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <h4><i class="icon-reorder"></i>Form Sample</h4>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal">
                                    <h3 class="form-section">Person Info</h3>
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label">First Name</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap span12" placeholder="Chee Kin">
                                                    <span class="help-block">This is inline help</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group error">
                                                <label class="control-label">Last Name</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap span12" placeholder="Lim">
                                                    <span class="help-block">This field has error.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label">Gender</label>
                                                <div class="controls">
                                                    <select class="m-wrap span12">
                                                        <option value="">Male</option>
                                                        <option value="">Female</option>
                                                    </select>
                                                    <span class="help-block">Select your gender.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >Date of Birth</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap span12" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label">Category</label>
                                                <div class="controls">
                                                    <select class="span12 chosen_category"  data-placeholder="Choose a Category" tabindex="1">
                                                        <option value=""></option>
                                                        <option value="Category 1">Category 1</option>
                                                        <option value="Category 2">Category 2</option>
                                                        <option value="Category 3">Category 5</option>
                                                        <option value="Category 4">Category 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label">Membership</label>
                                                <div class="controls">
                                                    <label class="radio">
                                                        <input type="radio" name="optionsRadios2" value="option1" />
                                                        Free
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="optionsRadios2" value="option2" checked />
                                                        Professional
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <h3 class="form-section">Address</h3>
                                    <div class="row-fluid">
                                        <div class="span12 ">
                                            <div class="control-group">
                                                <label class="control-label">Street</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap span12" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label">City</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap span12">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >State</label>
                                                <div class="controls">
                                                    <input type="text"  class="m-wrap span12">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label">Post Code</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap span12">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label">Country</label>
                                                <div class="controls">
                                                    <select class="m-wrap span12"></select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="form-actions">
                                        <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                        <button type="button" class="btn">Cancel</button>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="tab_3">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <h4><i class="icon-reorder"></i>Form Sample</h4>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <div class="form-horizontal form-view">
                                    <h3> View User Info - Bob Nilson </h3>
                                    <h3 class="form-section">Person Info</h3>
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" for="firstName">First Name:</label>
                                                <div class="controls">
                                                    <span class="text">Bob</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" for="lastName">Last Name:</label>
                                                <div class="controls">
                                                    <span class="text">Nilson</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >Gender:</label>
                                                <div class="controls">
                                                    <span class="text">Male</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >Date of Birth:</label>
                                                <div class="controls">
                                                    <span class="text bold">20.01.1984</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >Category:</label>
                                                <div class="controls">
                                                    <span class="text bold">Category1</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >Membership:</label>
                                                <div class="controls">
                                                    <span class="text bold">Free</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <h3 class="form-section">Address</h3>
                                    <div class="row-fluid">
                                        <div class="span12 ">
                                            <div class="control-group">
                                                <label class="control-label" >Street:</label>
                                                <div class="controls">
                                                    <span class="text">#24 Sun Park Avenue, Rolton Str</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >City:</label>
                                                <div class="controls">
                                                    <span class="text">New York</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" >State:</label>
                                                <div class="controls">
                                                    <span class="text">New York</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >Post Code:</label>
                                                <div class="controls">
                                                    <span class="text">457890</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label" >Country:</label>
                                                <div class="controls">
                                                    <span class="text">USA</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn blue"><i class="icon-pencil"></i> Edit</button>
                                        <button type="button" class="btn">Back</button>
                                    </div>
                                </div>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane"  id="tab_4">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <h4><i class="icon-reorder"></i>Form Sample</h4>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-row-seperated">
                                    <div class="control-group">
                                        <label class="control-label">First Name</label>
                                        <div class="controls">
                                            <input type="text" placeholder="small" class="m-wrap span12" />
                                            <span class="help-inline">This is inline help</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Last Name</label>
                                        <div class="controls">
                                            <input type="text" placeholder="medium" class="m-wrap span12" />
                                            <span class="help-inline">This is inline help</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Gender</label>
                                        <div class="controls">
                                            <select  class="m-wrap span12">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                            <span class="help-block">Select your gender.</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Date of Birth</label>
                                        <div class="controls">
                                            <input type="text" class="m-wrap span12"  placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Category</label>
                                        <div class="controls">
                                            <select class="span12 chosen_category" data-placeholder="Choose a Category" tabindex="1">
                                                <option value=""></option>
                                                <option value="Category 1">Category 1</option>
                                                <option value="Category 2">Category 2</option>
                                                <option value="Category 3">Category 5</option>
                                                <option value="Category 4">Category 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Membership</label>
                                        <div class="controls">
                                            <label class="radio">
                                                <input type="radio" name="optionsRadios2" value="option1" />
                                                Free
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="optionsRadios2" value="option2" checked />
                                                Professional
                                            </label>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Street</label>
                                        <div class="controls">
                                            <input type="text" class="m-wrap span12" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >City</label>
                                        <div class="controls">
                                            <input type="text"  class="m-wrap span12">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >State</label>
                                        <div class="controls">
                                            <input type="text"  class="m-wrap span12">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Post Code</label>
                                        <div class="controls">
                                            <input type="text" class="m-wrap span12">
                                        </div>
                                    </div>
                                    <div class="control-group last">
                                        <label class="control-label" >Country</label>
                                        <div class="controls">
                                            <select  class="m-wrap span12"></select>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                        <button type="button" class="btn">Cancel</button>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane"  id="tab_5">
                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <h4><i class="icon-reorder"></i>Form Sample</h4>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-bordered">
                                    <div class="control-group">
                                        <label class="control-label">First Name</label>
                                        <div class="controls">
                                            <input type="text" placeholder="small" class="m-wrap span12" />
                                            <span class="help-inline">This is inline help</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Last Name</label>
                                        <div class="controls">
                                            <input type="text" placeholder="medium" class="m-wrap span12" />
                                            <span class="help-inline">This is inline help</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Gender</label>
                                        <div class="controls">
                                            <select  class="m-wrap span12">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                            <span class="help-block">Select your gender.</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Date of Birth</label>
                                        <div class="controls">
                                            <input type="text" class="m-wrap span12"  placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Category</label>
                                        <div class="controls">
                                            <div class="chosen-container">
                                                <select class="span12 chosen_category" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value=""></option>
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Membership</label>
                                        <div class="controls">
                                            <label class="radio">
                                                <input type="radio" name="optionsRadios2" value="option1" />
                                                Free
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="optionsRadios2" value="option2" checked />
                                                Professional
                                            </label>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Street</label>
                                        <div class="controls">
                                            <input type="text" class="m-wrap span12" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >City</label>
                                        <div class="controls">
                                            <input type="text"  class="m-wrap span12">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >State</label>
                                        <div class="controls">
                                            <input type="text"  class="m-wrap span12">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Post Code</label>
                                        <div class="controls">
                                            <input type="text" class="m-wrap span12">
                                        </div>
                                    </div>
                                    <div class="control-group last">
                                        <label class="control-label" >Country</label>
                                        <div class="controls">
                                            <select  class="m-wrap span12"></select>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                        <button type="button" class="btn">Cancel</button>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane"  id="tab_6">
                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <h4><i class="icon-reorder"></i>Form Sample</h4>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-bordered form-row-stripped">
                                    <div class="control-group">
                                        <label class="control-label">First Name</label>
                                        <div class="controls">
                                            <input type="text" placeholder="small" class="m-wrap span12" />
                                            <span class="help-inline">This is inline help</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Last Name</label>
                                        <div class="controls">
                                            <input type="text" placeholder="medium" class="m-wrap span12" />
                                            <span class="help-inline">This is inline help</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Gender</label>
                                        <div class="controls">
                                            <select  class="m-wrap span12">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                            <span class="help-block">Select your gender.</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Date of Birth</label>
                                        <div class="controls">
                                            <input type="text" class="m-wrap span12"  placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Category</label>
                                        <div class="controls">
                                            <div class="chosen-container">
                                                <select class="span12 chosen_category" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value=""></option>
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                                <span class="help-block">Select your category.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Membership</label>
                                        <div class="controls">
                                            <label class="radio">
                                                <input type="radio" name="optionsRadios2" value="option1" />
                                                Free
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="optionsRadios2" value="option2" checked />
                                                Professional
                                            </label>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Street</label>
                                        <div class="controls">
                                            <input type="text" class="m-wrap span12" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >City</label>
                                        <div class="controls">
                                            <input type="text"  class="m-wrap span12">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >State</label>
                                        <div class="controls">
                                            <input type="text"  class="m-wrap span12">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Post Code</label>
                                        <div class="controls">
                                            <input type="text" class="m-wrap span12">
                                        </div>
                                    </div>
                                    <div class="control-group last">
                                        <label class="control-label" >Country</label>
                                        <div class="controls">
                                            <select  class="m-wrap span12"></select>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                        <button type="button" class="btn">Cancel</button>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane"  id="tab_7">
                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <h4><i class="icon-reorder"></i>Form Sample</h4>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal form-bordered form-label-stripped">
                                    <div class="control-group">
                                        <label class="control-label">First Name</label>
                                        <div class="controls">
                                            <input type="text" placeholder="small" class="m-wrap span12" />
                                            <span class="help-inline">This is inline help</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Last Name</label>
                                        <div class="controls">
                                            <input type="text" placeholder="medium" class="m-wrap span12" />
                                            <span class="help-inline">This is inline help</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Gender</label>
                                        <div class="controls">
                                            <select  class="m-wrap span12">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                            <span class="help-block">Select your gender.</span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Date of Birth</label>
                                        <div class="controls">
                                            <input type="text" class="m-wrap span12"  placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Category</label>
                                        <div class="controls">
                                            <div class="chosen-container">
                                                <select class="span12 chosen_category" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value=""></option>
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                                <span class="help-block">Select your category.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Membership</label>
                                        <div class="controls">
                                            <label class="radio">
                                                <input type="radio" name="optionsRadios2" value="option1" />
                                                Free
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="optionsRadios2" value="option2" checked />
                                                Professional
                                            </label>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Street</label>
                                        <div class="controls">
                                            <input type="text" class="m-wrap span12" >
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >City</label>
                                        <div class="controls">
                                            <input type="text"  class="m-wrap span12">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >State</label>
                                        <div class="controls">
                                            <input type="text"  class="m-wrap span12">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" >Post Code</label>
                                        <div class="controls">
                                            <input type="text" class="m-wrap span12">
                                        </div>
                                    </div>
                                    <div class="control-group last">
                                        <label class="control-label" >Country</label>
                                        <div class="controls">
                                            <select  class="m-wrap span12"></select>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                        <button type="button" class="btn">Cancel</button>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop

@section('initial_js')
    jQuery(document).ready(function() {

    // to fix chosen dropdown width in inactive hidden tab content
    $('.advance_form_with_chosen_element').on('shown', function (e) {
    App.initChosenSelect('.chosen_category:visible');
    });

    // initiate layout and plugins
    App.init();
    });
@stop