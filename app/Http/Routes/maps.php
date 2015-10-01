<?php
/**
 * Created by PhpStorm.
 * User: AL Kindi Isda
 * Date: 7/27/2015
 * Time: 3:31 PM
 */

Route::group(['middleware' => 'auth'], function () {

    Route::get('{parent}/google_maps',function($parent){
        Session::set('cur',$parent);
        return view('example.maps_google');
    });
    Route::get('{parent}/vector_maps',function($parent){
        Session::set('cur',$parent);
        return view('example.maps_vector');
    });


});