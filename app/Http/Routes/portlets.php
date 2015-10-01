<?php
/**
 * Created by PhpStorm.
 * User: AL Kindi Isda
 * Date: 7/27/2015
 * Time: 3:31 PM
 */


Route::group(['middleware' => 'auth'], function () {

    Route::get('{parent}/general_portlets',function($parent){
        Session::set('cur',$parent);
        return view('example.portlet_general');
    });
    Route::get('{parent}/draggable_portlets',function($parent){
        Session::set('cur',$parent);
        return view('example.portlet_draggable');
    });

});