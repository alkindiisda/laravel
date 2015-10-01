@extends('example.master')
@section('page-title','Welcome')
@section('breadcrumb')
    <li><a>Dashboard</a>
@stop
@section('content')

dfghjkl;
@stop

@section('initial_js')
    jQuery(document).ready(function() {
    App.setPage("index");  // set current page
    App.init(); // init the rest of plugins and elements
    });
@stop
