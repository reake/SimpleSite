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
Route::group(['domain' => '{subDomain}.simple-site.cn'], function () {
    Route::get('/', function ($subDomain) {
        // 判断 subDomain 是否存在
        return view('themes/default/index', ['theme' => 'default']);
    });

    Route::get('/manage/login', ['as' => 'login', 'uses' => 'UserController@login']);
    Route::get('/manage/register', ['as' => 'register', 'uses' => 'UserController@register']);
    Route::post('/manage/_login', ['as' => 'login', 'uses' => 'UserController@_login']);
    Route::post('/manage/_register', ['as' => 'register', 'uses' => 'UserController@_register']);
    Route::get('/manage/dashboard', ['as' => 'dashboard', 'middleware' => 'auth', 'uses' => 'Main\MainController@dashboard']);
    Route::get('/manage/version', ['as' => 'version', 'uses' => 'Main\MainController@version']);
});