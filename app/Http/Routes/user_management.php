<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Route::get('menus',array('as'=>'menus','uses'=>'Menu\MenuController@get_menus'));
//Route::get('menu/{parent}/{child}',array('as'=>'menu','uses'=>'Menu\MenuController@get_menu'));


Route::group(['middleware' => 'auth'], function () {
//Add Menu Properties
    Route::get('{parent}/add_menu',array('as'=>'menus','uses'=>'Menu\UserManagementController@getAddMenu'));
    Route::post('add_menu/action', 'Menu\UserManagementController@addMenuAction');
//Assign Menu Properties
    Route::get('{parent}/assign_menu',array('as'=>'menus','uses'=>'Menu\UserManagementController@getAssignMenu'));
    Route::post('get_menu_role', 'Menu\UserManagementController@menuForRole');
    Route::post('updateAssignMenu', 'Menu\UserManagementController@updateAssignMenu');
//Add Role Properties
    Route::get('{parent}/add_roles',array('as'=>'menus','uses'=>'Menu\UserManagementController@getAddRoles'));
    Route::post('add_roles/action', 'Menu\UserManagementController@addRolesAction');
//Assign Roles Properties
    Route::get('{parent}/assign_roles',array('as'=>'menus','uses'=>'Menu\UserManagementController@getAssignRoles'));
    Route::post('getUser', 'Menu\UserManagementController@getUser');
    Route::post('updateUserRole', 'Menu\UserManagementController@updateUserRole');

});