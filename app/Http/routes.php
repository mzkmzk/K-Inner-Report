<?php

Route::get('/a', function () {
    //$abc = [];
	echo $abc['12345'];
	//return view('welcome');
});

Route::get('/php_info', function () {
    //$abc = [];
    //echo $abc['12345'];
    phpinfo();
});

Route::any('/get_token','QiNiu_Controller@get_token');

Route::group(['prefix' => 'v2/Chart_Controller'],function(){
    Route::get('line','Chart_Controller@line');
    Route::get('network_chart','Chart_Controller@network_chart');
    Route::get('error_chart','Chart_Controller@error_chart');
});

Route::group(['prefix' => 'v2/Activity_Controller'],function(){
    //Route::get('query','Activity_Controller@query');
    Route::any('insert','Activity_Controller@insert');
});

Route::group(['prefix' => 'v2/User_Controller'],function(){
    Route::get('sinaLogin','User_Controller@sinaLogin');
});

Route::get('jsonp_demo',function() {
    return Request::get('callback') . "({'name': 'i am k', 'email': 'mz_kk@sina.com'})";
});