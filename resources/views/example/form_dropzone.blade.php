@extends('example.master')
@section('page-title','Dropzone File Upload')
@section('breadcrumb')
    <li><a>{{Session::get('cur')}}</a> <i class="icon-angle-right"></i></li>
    <li><a>Dropzone File Upload</a></li>
@stop
@section('content')
    <div class="row-fluid">
        <div class="span12">
            <form action="assets/dropzone/upload.php" class="dropzone" id="my-awesome-dropzone">
            </form>
        </div>
    </div>
    @stop

@section('initial_js')
    jQuery(document).ready(function() {
    // initiate layout and plugins
    App.setPage('calendar');
    App.init();
    });

@stop
@section('js')
    <script src="assets/dropzone/dropzone.js"></script>

@stop

@section('css')
    <link href="assets/dropzone/css/dropzone.css" rel="stylesheet"/>

@stop