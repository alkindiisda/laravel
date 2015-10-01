<?php
/**
 * Created by PhpStorm.
 * User: AL Kindi Isda
 * Date: 7/27/2015
 * Time: 3:32 PM
 */

Route::group(['middleware' => 'auth'], function () {

    Route::get('{parent}/visual_chart_example',function($parent){
        Session::set('cur',$parent);
        return view('example.charts');
    });


});