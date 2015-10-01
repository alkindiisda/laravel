@extends('example.master')
@section('page-title','Assign Roles')
@section('breadcrumb')
    <li><a>{{Session::get('cur')}}</a> <i class="icon-angle-right"></i></li>
    <li><a>Assign Roles</a></li>
@stop

@section('content')
    <div class="row-fluid profile">
        <div class="tabbable tabbable-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab_1_2">Find User by Username,Email or ID</a></li>
            </ul>
            <div class="tab-content">
                <div id="tab_1_2" class="tab-pane active">
                    <div class="row-fluid search-forms search-default">

                        <div class="chat-form">
                            <div class="input-cont">
                                <input id="idfind" type="text" placeholder="Search..." class="m-wrap"  />
                            </div>
                            <button type="button" class="btn green">Search &nbsp; <i class="m-icon-swapright m-icon-white"></i></button>
                        </div>

                    </div>
                    <div class="tab-pane " id="tab_1">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <h4><i class="icon-reorder"></i>Change User Role</h4>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->

                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label">User Found</label>
                                                <div class="controls">
                                                    <input id="user" type="text" class="m-wrap span12" disabled>
                                                    <span class="help-block">Assign this user to the role</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!--/span-->
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label">Set as Role</label>
                                                <div class="controls">
                                                    <select id="setRole" class="span12 chosen_category"  data-placeholder="Choose a Category" tabindex="1">
                                                        @foreach($roles as $role)
                                                            <option value="{{$role->id}}">{{$role->display_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                <div class="row-fluid">
                                    <div class="span6 ">
                                        <div class="control-group">
                                            <label class="control-label">Full Name</label>
                                            <div class="controls">
                                                <input id="fullname" type="text" class="m-wrap span12" disabled>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span6 ">
                                        <div class="control-group">
                                            <label class="control-label">Email</label>
                                            <div class="controls">
                                                <input id="email" type="text" class="m-wrap span12" disabled>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row-fluid">
                                        <div class="span6 ">
                                            <div class="control-group">
                                                <label class="control-label">Current Role</label>
                                                <div class="controls">
                                                    <input id="currentrole" type="text" class="m-wrap span12" disabled>
                                                    <span class="help-block">User has this role</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="form-actions">
                                        <button type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                        <button type="button" class="btn">Cancel</button>
                                    </div>

                                <!-- END FORM-->
                            </div>
                        </div>
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

    $('#idfind').keydown(function (e){
    $(".alert-success").hide();
    $(".alert-error").hide();
    if(e.keyCode == 13){
    var access="";
    var id="";
    var user="";
    var email="";
    //alert('you pressed enter ^_^'+$(this).val().length);
    if(isNaN($(this).val())){
        if($(this).val().search("@") == -1){
        user=$(this).val();
        if(user.length>3){access="user";}
        }else{
        email=$(this).val();
        if(email.length>2){access="email";}

        }
    }else{
        access="id";
        id=$(this).val();
        }
if(access.length > 0){
    App.blockUI($('.portlet'));
    $.ajax({
    type: 'POST',
    url: "/getUser",
    data: { user: user,id:id,email:email,action:access}
    }).success(function (data) {
    console.log(data);
    $("#user").val(data[1][0].name);
    $("#user").attr("prefix",data[1][0].id);
    $("#fullname").val(data[1][0].fullname);
    $("#email").val(data[1][0].email);
    $("#currentrole").val(data[2]);

    })
    .error(function (data) { // the data parameter here is a jqXHR instance

    showError(data.responseText);
    $("#user").val("");
    $("#fullname").val("");
    $("#email").val("");
    $("#currentrole").val("");
    $("#user").attr("prefix","");
    });
    App.unblockUI($('.portlet'));

}

    }
    })

    $('*[type=submit]').click(function () {
    console.log("id user: "+$("#user").attr("prefix"));
    console.log("id role: "+$("#setRole").val());

    //belajar coding
    App.blockUI($('.portlet'));
    $.ajax({
    type: 'POST',
    url: "/updateUserRole",
    data: { user: $("#user").attr("prefix"),role:$("#setRole").val()}
    }).success(function (data) {
    console.log("succeed to set the role !!");
    showSuccess("User :"+$("#fullname").val()+" set as Role: "+$("#currentrole").val());

    })
    .error(function (data) { // the data parameter here is a jqXHR instance
    console.log(data);
    $("#user").val("");
    $("#fullname").val("");
    $("#email").val("");
    $("#currentrole").val("");
    showError(data.responseText)
    });
    App.unblockUI($('.portlet'));

    });

@stop

