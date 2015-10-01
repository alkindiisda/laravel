<?php
/**
 * Created by PhpStorm.
 * User: AL Kindi Isda
 * Date: 7/27/2015
 * Time: 3:31 PM
 */

Route::group(['middleware' => 'auth'], function ($parent) {

    Route::get('{parent}/basic_tables',function($parent){
        Session::set('cur',$parent);
        return view('example.table_basic');
    });
    Route::get('{parent}/managed_tables',function($parent){
        Session::set('cur',$parent);
        return view('example.table_managed');
    });

    Route::get('{parent}/editable_tables',array('as'=>'menus','uses'=>'Menu\MenuController@get_editable'));

    Route::post('updatetable', 'Menu\MenuController@update_table');

});

