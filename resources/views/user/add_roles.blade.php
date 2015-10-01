@extends('example.master')
@section('page-title','Add Roles')
@section('breadcrumb')
    <li><a>{{Session::get('cur')}}</a> <i class="icon-angle-right"></i></li>
    <li><a>Add Roles</a></li>
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
                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1" prefix="{{ url('add_roles/action') }} ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th style="width: auto !important;">Display Name</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                         {{--abbr attribute is used for primary key, it means that the fields unchange.--}}

                        @foreach($roles as $role)
                            <tr class="">
                                <td abbr="disabled">{{$role->id}}</td>
                                <td >{{$role->name}}</td>
                                <td >{{$role->display_name}}</td>
                                <td >{{$role->description}}</td>
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
        return data;
    }

@stop

@section('css')
    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />

@stop
