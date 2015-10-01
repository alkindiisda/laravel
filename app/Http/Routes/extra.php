<?php
/**
 * Created by PhpStorm.
 * User: AL Kindi Isda
 * Date: 7/27/2015
 * Time: 3:33 PM
 */

Route::group(['middleware' => 'auth'], function () {

    Route::get('{parent}/user_profile',function($parent){
        Session::set('cur',$parent);
        return view('example.extra_profile');
    });
    Route::get('{parent}/faq',function($parent){
        Session::set('cur',$parent);
        return view('example.extra_faq');
    });
    Route::get('{parent}/search_results',function($parent){
        Session::set('cur',$parent);
        return view('example.extra_search');
    });
    Route::get('{parent}/invoice',function($parent){
        Session::set('cur',$parent);
        return view('example.extra_invoice');
    });
    Route::get('{parent}/pricing_tables',function($parent){
        Session::set('cur',$parent);
        return view('example.extra_pricing_table');
    });
    Route::get('{parent}/404_page',function($parent){
        Session::set('cur',$parent);
        return view('example.extra_404');
    });
    Route::get('{parent}/500_page',function($parent){
        Session::set('cur',$parent);
        return view('example.extra_500');
    });
    Route::get('{parent}/blank_page',function($parent){
        Session::set('cur',$parent);
        return view('example.extra_blank');
    });
    Route::get('{parent}/full_width',function($parent){
        Session::set('cur',$parent);
        return view('example.extra_full_width');
    });


});