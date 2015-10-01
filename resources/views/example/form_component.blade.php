
@extends('example.master')
@section('page-title','Form Components')
@section('breadcrumb')
    <li><a>{{Session::get('cur')}}</a> <i class="icon-angle-right"></i></li>
    <li><a>Form Components</a></li>
@stop
@section('content')
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Sample Form</h4>
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
                        <div class="control-group">
                            <label class="control-label">Input</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap" />
                                <span class="help-inline">Some hint here</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Disabled Input</label>
                            <div class="controls">
                                <input class="span6 m-wrap" type="text" placeholder="Disabled input here..." disabled />
                                <span class="help-inline">Some hint here</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Readonly Input</label>
                            <div class="controls">
                                <input class="span6 m-wrap" type="text" placeholder="Readonly input here..." disabled />
                                <span class="help-inline">Some hint here</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Input with Popover</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Input with Tooltip</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here." />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Auto Complete</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" />
                                <p class="help-block">Start typing to auto complete!. E.g: California</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email Address Input</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="add-on">@</span><input class="m-wrap " type="text" placeholder="Email Address" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email Address Input</label>
                            <div class="controls">
                                <div class="input-icon left">
                                    <i class="icon-envelope"></i>
                                    <input class="m-wrap " type="text" placeholder="Email Address" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Currency Input</label>
                            <div class="controls">
                                <div class="input-prepend input-append">
                                    <span class="add-on">$</span><input class="m-wrap " type="text" /><span class="add-on">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Default Dropdown</label>
                            <div class="controls">
                                <select class="span6 m-wrap" data-placeholder="Choose a Category" tabindex="1">
                                    <option value="">Select...</option>
                                    <option value="Category 1">Category 1</option>
                                    <option value="Category 2">Category 2</option>
                                    <option value="Category 3">Category 5</option>
                                    <option value="Category 4">Category 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Default Dropdown(Multiple)</label>
                            <div class="controls">
                                <select class="span6 m-wrap" multiple="multiple" data-placeholder="Choose a Category" tabindex="1">
                                    <option value="Category 1">Category 1</option>
                                    <option value="Category 2">Category 2</option>
                                    <option value="Category 3">Category 5</option>
                                    <option value="Category 4">Category 4</option>
                                    <option value="Category 3">Category 6</option>
                                    <option value="Category 4">Category 7</option>
                                    <option value="Category 3">Category 8</option>
                                    <option value="Category 4">Category 9</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Custom Dropdown</label>
                            <div class="controls">
                                <select class="span6 chosen" data-placeholder="Choose a Category" tabindex="1">
                                    <option value=""></option>
                                    <option value="Category 1">Category 1</option>
                                    <option value="Category 2">Category 2</option>
                                    <option value="Category 3">Category 5</option>
                                    <option value="Category 4">Category 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Grouped Custom Dropdown</label>
                            <div class="controls">
                                <select data-placeholder="Your Favorite Football Team" class="chosen span6" tabindex="-1" id="selS0V">
                                    <option value=""></option>
                                    <optgroup label="NFC EAST">
                                        <option>Dallas Cowboys</option>
                                        <option>New York Giants</option>
                                        <option>Philadelphia Eagles</option>
                                        <option>Washington Redskins</option>
                                    </optgroup>
                                    <optgroup label="NFC NORTH">
                                        <option>Chicago Bears</option>
                                        <option>Detroit Lions</option>
                                        <option>Green Bay Packers</option>
                                        <option>Minnesota Vikings</option>
                                    </optgroup>
                                    <optgroup label="NFC SOUTH">
                                        <option>Atlanta Falcons</option>
                                        <option>Carolina Panthers</option>
                                        <option>New Orleans Saints</option>
                                        <option>Tampa Bay Buccaneers</option>
                                    </optgroup>
                                    <optgroup label="NFC WEST">
                                        <option>Arizona Cardinals</option>
                                        <option>St. Louis Rams</option>
                                        <option>San Francisco 49ers</option>
                                        <option>Seattle Seahawks</option>
                                    </optgroup>
                                    <optgroup label="AFC EAST">
                                        <option>Buffalo Bills</option>
                                        <option>Miami Dolphins</option>
                                        <option>New England Patriots</option>
                                        <option>New York Jets</option>
                                    </optgroup>
                                    <optgroup label="AFC NORTH">
                                        <option>Baltimore Ravens</option>
                                        <option>Cincinnati Bengals</option>
                                        <option>Cleveland Browns</option>
                                        <option>Pittsburgh Steelers</option>
                                    </optgroup>
                                    <optgroup label="AFC SOUTH">
                                        <option>Houston Texans</option>
                                        <option>Indianapolis Colts</option>
                                        <option>Jacksonville Jaguars</option>
                                        <option>Tennessee Titans</option>
                                    </optgroup>
                                    <optgroup label="AFC WEST">
                                        <option>Denver Broncos</option>
                                        <option>Kansas City Chiefs</option>
                                        <option>Oakland Raiders</option>
                                        <option>San Diego Chargers</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Custom Dropdown Multiple Select</label>
                            <div class="controls">
                                <select data-placeholder="Your Favorite Football Teams" class="chosen span6" multiple="multiple" tabindex="6">
                                    <option value=""></option>
                                    <optgroup label="NFC EAST">
                                        <option>Dallas Cowboys</option>
                                        <option>New York Giants</option>
                                        <option>Philadelphia Eagles</option>
                                        <option>Washington Redskins</option>
                                    </optgroup>
                                    <optgroup label="NFC NORTH">
                                        <option selected>Chicago Bears</option>
                                        <option>Detroit Lions</option>
                                        <option>Green Bay Packers</option>
                                        <option>Minnesota Vikings</option>
                                    </optgroup>
                                    <optgroup label="NFC SOUTH">
                                        <option>Atlanta Falcons</option>
                                        <option selected>Carolina Panthers</option>
                                        <option>New Orleans Saints</option>
                                        <option>Tampa Bay Buccaneers</option>
                                    </optgroup>
                                    <optgroup label="NFC WEST">
                                        <option>Arizona Cardinals</option>
                                        <option>St. Louis Rams</option>
                                        <option>San Francisco 49ers</option>
                                        <option>Seattle Seahawks</option>
                                    </optgroup>
                                    <optgroup label="AFC EAST">
                                        <option>Buffalo Bills</option>
                                        <option>Miami Dolphins</option>
                                        <option>New England Patriots</option>
                                        <option>New York Jets</option>
                                    </optgroup>
                                    <optgroup label="AFC NORTH">
                                        <option>Baltimore Ravens</option>
                                        <option>Cincinnati Bengals</option>
                                        <option>Cleveland Browns</option>
                                        <option>Pittsburgh Steelers</option>
                                    </optgroup>
                                    <optgroup label="AFC SOUTH">
                                        <option>Houston Texans</option>
                                        <option>Indianapolis Colts</option>
                                        <option>Jacksonville Jaguars</option>
                                        <option>Tennessee Titans</option>
                                    </optgroup>
                                    <optgroup label="AFC WEST">
                                        <option>Denver Broncos</option>
                                        <option>Kansas City Chiefs</option>
                                        <option>Oakland Raiders</option>
                                        <option>San Diego Chargers</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Custom Dropdown Diselect</label>
                            <div class="controls">
                                <select data-placeholder="Your Favorite Type of Bear" class="chosen-with-diselect span6" tabindex="-1" id="selCSI">
                                    <option value=""></option>
                                    <option>American Black Bear</option>
                                    <option>Asiatic Black Bear</option>
                                    <option>Brown Bear</option>
                                    <option>Giant Panda</option>
                                    <option selected="">Sloth Bear</option>
                                    <option>Sun Bear</option>
                                    <option>Polar Bear</option>
                                    <option>Spectacled Bear</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Radio Buttons</label>
                            <div class="controls">
                                <label class="radio">
                                    <input type="radio" name="optionsRadios1" value="option1" />
                                    Option 1
                                </label>
                                <label class="radio">
                                    <input type="radio" name="optionsRadios1" value="option2" checked />
                                    Option 2
                                </label>
                                <label class="radio">
                                    <input type="radio" name="optionsRadios1" value="option2" />
                                    Option 3
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Radio Buttons</label>
                            <div class="controls">
                                <label class="radio line">
                                    <input type="radio" name="optionsRadios2" value="option1" />
                                    Option 1
                                </label>
                                <label class="radio line">
                                    <input type="radio" name="optionsRadios2" value="option2" checked />
                                    Option 2
                                </label>
                                <label class="radio line">
                                    <input type="radio" name="optionsRadios2" value="option2" />
                                    Option 3
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Checkbox</label>
                            <div class="controls">
                                <label class="checkbox">
                                    <input type="checkbox" value="" /> Checkbox 1
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="" /> Checkbox 2
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Checkbox</label>
                            <div class="controls">
                                <label class="checkbox line">
                                    <input type="checkbox" value="" /> Checkbox 1
                                </label>
                                <label class="checkbox line">
                                    <input type="checkbox" value="" /> Checkbox 2
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Textarea</label>
                            <div class="controls">
                                <textarea class="span6 m-wrap" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn blue">Submit</button>
                            <button type="button" class="btn">Cancel</button>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN PORTLET-->
            <div class="portlet box purple">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Tags Input</h4>
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
                        <div class="control-group">
                            <label class="control-label">Default</label>
                            <div class="controls">
                                <input id="tags_1" type="text" class="m-wra tags" value="foo,bar,baz,roffle" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Fixed Width</label>
                            <div class="controls">
                                <input id="tags_2" type="text" class="m-wra tags medium" value="tag1,tag2" />
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN PORTLET-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>File Upload</h4>
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
                        <div class="control-group">
                            <label class="control-label">Default</label>
                            <div class="controls">
                                <input type="file" class="default" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Advanced</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-append">
                                        <div class="uneditable-input">
                                            <i class="icon-file fileupload-exists"></i>
                                            <span class="fileupload-preview"></span>
                                        </div>
                                       <span class="btn btn-file">
                                       <span class="fileupload-new">Select file</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" class="default" />
                                       </span>
                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Without input</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <span class="btn btn-file">
                                    <span class="fileupload-new">Select file</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" class="default" />
                                    </span>
                                    <span class="fileupload-preview"></span>
                                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none"></a>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Image Upload</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" class="default" /></span>
                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                </div>
                                <span class="label label-important">NOTE!</span>
                                 <span>
                                 Attached image thumbnail is
                                 supported in Latest Firefox, Chrome, Opera,
                                 Safari and Internet Explorer 10 only
                                 </span>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Color Pickers</h4>
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
                        <div class="control-group">
                            <label class="control-label">Default</label>
                            <div class="controls">
                                <input type="text" class="colorpicker-default m-wrap" value="#8fff00" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">RGBA</label>
                            <div class="controls">
                                <input type="text" class="colorpicker-rgba m-wrap" value="rgb(0,194,255,0.78)" data-color-format="rgba" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">As Component</label>
                            <div class="controls">
                                <div class="input-append color colorpicker-default" data-color="#3865a8" data-color-format="rgba">
                                    <input type="text" class="m-wrap" value="#3865a8" readonly />
                                    <span class="add-on"><i style="background-color: #3865a8;"></i></span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN PORTLET-->
            <div class="portlet box red">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Time Pickers</h4>
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
                        <div class="control-group">
                            <label class="control-label">Default Timepicker</label>
                            <div class="controls">
                                <div class="input-append bootstrap-timepicker-component">
                                    <input class="m-wrap m-ctrl-small timepicker-default" type="text" />
                                    <span class="add-on"><i class="icon-time"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">24hr Timepicker</label>
                            <div class="controls">
                                <div class="input-append bootstrap-timepicker-component">
                                    <input class="m-wrap m-ctrl-small timepicker-24" type="text" />
                                    <span class="add-on"><i class="icon-time"></i></span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN PORTLET-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>
                        Clockface Time Pickers
                    </h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form action="#" class="form-horizontal">
                        <div class="control-group">
                            <label class="control-label">Input</label>
                            <div class="controls">
                                <input type="text" id="clockface_1" value="2:30 PM" data-format="hh:mm A" class="m-wrap small" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Button</label>
                            <div class="controls">
                                <div class="input-append">
                                    <input type="text" id="clockface_2" value="14:30" class="m-wrap small" readonly="" />
                                    <button class="btn" type="button" id="clockface_2_toggle-btn">
                                        <i class="icon-time"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Inline</label>
                            <div class="controls">
                                <div id="clockface_3" class="well" style="padding: 0; float: left"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN PORTLET-->
            <div class="portlet box grey">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Date Pickers</h4>
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
                        <div class="control-group">
                            <label class="control-label">Default datepicker</label>
                            <div class="controls">
                                <input class="m-wrap m-ctrl-medium date-picker" size="16" type="text" value="12-02-2012" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Starts with years view</label>
                            <div class="controls">
                                <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                    <input class="m-wrap m-ctrl-medium date-picker" size="16" type="text" value="12-02-2012" /><span class="add-on"><i class="icon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Limit the view mode to months</label>
                            <div class="controls">
                                <div class="input-append date date-picker" data-date="102/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                                    <input class="m-wrap m-ctrl-medium date-picker" size="16" type="text" value="02/2012" /><span class="add-on"><i class="icon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN PORTLET-->
            <div class="portlet box yellow">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Date Range Pickers</h4>
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
                        <div class="control-group">
                            <label class="control-label">Default Date Ranges</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-calendar"></i></span><input type="text" class="m-wrap m-ctrl-medium date-range" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Advance Date Ranges</label>
                            <div class="controls">
                                <div id="form-date-range" class="btn">
                                    <i class="icon-calendar"></i>
                                    &nbsp;<span></span>
                                    <b class="caret"></b>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN EXTRAS PORTLET-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-reorder"></i>Extras</h4>
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
                        <div class="control-group">
                            <label class="control-label">Right Action Input</label>
                            <div class="controls">
                                <div class="input-append">
                                    <input class="m-wrap medium" type="text" />
                                    <div class="btn-group">
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                            Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Left Action Input</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <div class="btn-group">
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                            Action
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <!-- /btn-group -->
                                    <input class="m-wrap medium" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Basic Toggle Button</label>
                            <div class="controls">
                                <div class="basic-toggle-button">
                                    <input type="checkbox" class="toggle" checked="checked" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Toggle Buttons with Text</label>
                            <div class="controls">
                                <div class="text-toggle-button">
                                    <input type="checkbox" class="toggle" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Styled Toggle Button</label>
                            <div class="controls">
                                <div class="danger-toggle-button">
                                    <input type="checkbox" class="toggle" checked="checked" />
                                </div>
                                <div class="info-toggle-button">
                                    <input type="checkbox" class="toggle" checked="checked" />
                                </div>
                                <div class="success-toggle-button">
                                    <input type="checkbox" class="toggle" checked="checked" />
                                </div>
                                <div class="warning-toggle-button">
                                    <input type="checkbox" class="toggle" checked="checked" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Height Toggle Button</label>
                            <div class="controls">
                                <div class="height-toggle-button">
                                    <input type="checkbox" class="toggle" checked="checked" />
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">WYSIWYG Editor</label>
                            <div class="controls">
                                <textarea class="span12 wysihtml5 m-wrap" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">CKEditor</label>
                            <div class="controls">
                                <textarea class="span12 ckeditor m-wrap" name="editor1" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn blue">Submit</button>
                            <button type="button" class="btn">Cancel</button>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END EXTRAS PORTLET-->
        </div>
    </div>
    @stop
@section('initial_js')
    jQuery(document).ready(function() {

    App.init(); // init the rest of plugins and elements
    });
@stop
@section('css')
    <link href="assets/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
    <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />

@stop



@section('js')
    <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
    <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
    <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
    <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
    @stop
