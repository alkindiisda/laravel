<?php
/**
 * Created by PhpStorm.
 * User: AL Kindi Isda
 * Date: 7/27/2015
 * Time: 3:26 PM
 */

Route::group(['middleware' => 'auth'], function () {
    //example 1
    Route::get('{parent}/general',function($request){
        Session::set('cur',$request);
        return view('example.ui_general');
    });
    Route::get('{parent}/button',function($request) {
        Session::set('cur', $request);
        return view('example.ui_buttons');
    });
    Route::get('{parent}/tabs',function($request){
        Session::set('cur',$request);
        return view('example.ui_tabs_accordions');
    });
    Route::get('{parent}/sliders',function($request) {
        Session::set('cur', $request);
        return view('example.ui_sliders');
    });
    Route::get('{parent}/tiles',function($request) {
        Session::set('cur', $request);
        return view('example.ui_tiles');
    });
    Route::get('{parent}/typography',function($request) {
        Session::set('cur', $request);
        return view('example.ui_typography');
    });
    Route::get('{parent}/tree',function($request) {
        Session::set('cur', $request);
        return view('example.ui_tree');
    });
    Route::get('{parent}/nestable',function($request) {
        Session::set('cur', $request);
        return view('example.ui_nestable');
    });

});