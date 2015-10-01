<?php
/**
 * Created by PhpStorm.
 * User: AL Kindi Isda
 * Date: 8/6/2015
 * Time: 9:28 AM
 */

Route::group(['middleware' => 'auth'], function () {

    Route::get('{parent}/text_recognition',function($parent){
        Session::set('cur',$parent);
        return view('example.plugin_text_recognition',["text"=>""]);
    });

    Route::post('uploadFile', 'Plugin\PluginController@uploadFile');


});