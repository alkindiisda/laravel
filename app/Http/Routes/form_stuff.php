<?php
/**
 * Created by PhpStorm.
 * User: AL Kindi Isda
 * Date: 7/27/2015
 * Time: 3:31 PM
 */


Route::group(['middleware' => 'auth'], function () {

    Route::get('{parent}/form_layout',function($parent){
        Session::set('cur',$parent);
        return view('example.form_layout');
    });
    Route::get('{parent}/advance_from_sample',function($parent){
        Session::set('cur',$parent);
        return view('example.form_samples');
    });
    Route::get('{parent}/form_components',function($parent){
        Session::set('cur',$parent);
        return view('example.form_component');
    });
    Route::get('{parent}/form_wizard',function($parent){
        Session::set('cur',$parent);
        return view('example.form_wizard');
    });
    Route::get('{parent}/form_validation',function($parent){
        Session::set('cur',$parent);
        return view('example.form_validation');
    });
    Route::get('{parent}/multiple_file_upload',function($parent){
        Session::set('cur',$parent);
        return view('example.form_fileupload');
    });
    Route::get('{parent}/dropzone_file_upload',function($parent){
        Session::set('cur',$parent);
        return view('example.form_dropzone');
    });

});