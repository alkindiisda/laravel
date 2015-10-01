<?php
use Illuminate\Contracts\Filesystem\FileNotFoundException;
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

Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        Session::set('cur','');
        //  Session::set('breadcrumb', 'Dashboard');
        return view('example.index');
    });

    Route::get('home',function(){
        Session::set('cur','');
        return view('example.index');
    });


});


$route_partials = [
    // Routing For Menu
    'user_management',
    'ui_features',
    'form_stuff',
    'data_tables',
    'portlets',
    'maps',
    'visual_charts',
    'calendar',
    'gallery',
    'extra',
    'plugin'
    //add other routing here...
];

/** Route Partial Loadup
=================================================== */

foreach ($route_partials as $partial) {

    $file = __DIR__.'/Routes/'.$partial.'.php';

    if ( ! file_exists($file))
    {
        $msg = "Route partial [{$partial}] not found.".$file;
        throw new FileNotFoundException($msg);
    }

    require_once $file;
}
