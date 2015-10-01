@extends('example.master')
@section('page-title','Add Menu')
@section('breadcrumb')
    <li><a>{{Session::get('cur')}}</a> <i class="icon-angle-right"></i></li>
    <li><a>Add Menu</a></li>
@stop

@section('content')
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-edit"></i>Editable Table</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="clearfix">
                        <div class="btn-group">
                            <button id="sample_editable_1_new" class="btn green">
                                Add New <i class="icon-plus"></i>
                            </button>
                        </div>
                        <div class="btn-group pull-right">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Print</a></li>
                                <li><a href="#">Save as PDF</a></li>
                                <li><a href="#">Export to Excel</a></li>
                            </ul>
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1" prefix="{{ url('add_menu/action') }} ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th style="width: auto !important;">Display Name</th>
                            <th>Description</th>
                            <th>Link</th>
                            <th>Parent</th>
                            <th>Icon</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                         {{--abbr attribute is used for primary key, it means that the fields unchange.--}}

                        @foreach($permission as $permit)
                            <tr class="">
                                <td abbr="disabled">{{$permit->id}}</td>
                                <td >{{$permit->name}}</td>
                                <td >{{$permit->display_name}}</td>
                                <td >{{$permit->description}}</td>
                                <td class="center">{{$permit->LINK}}</td>
                                <td>{{$permit->parent}}</td>
                                <td>{{$permit->icon}}</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@stop
@section('initial_js')
    jQuery(document).ready(function() {
    App.setPage("table_editable");  // set current page
    App.init(); // init the rest of plugins and elements
    });

    function generateEdit(data,ctr){
    var jso= "{!!$inputRole!!}";
    console.log($(data).val());
    if(ctr==5){
    data=$(data)[0].outerHTML.replace('type="text"', ' type="hidden" ');
    data=data.replace(' ',' id="'+ctr+'" ');
    jso=jso.replace("value='"+$(data).val()+"'","value='"+$(data).val()+"' selected");
    return data+jso;
    }else{
    return data;
    }
    }

    $('#col5').live("change", function() {
    console.log('hore');
    console.log($(this).val());
    $('#5').val($(this).val());
    });
@stop

@section('css')
    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />

@stop
