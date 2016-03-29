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

// 认证路由...
Route::get('manage/login', 'Auth\AuthController@getLogin');
Route::post('manage/login', 'Auth\AuthController@postLogin');
Route::get('manage/logout', 'Auth\AuthController@getLogout');

// 注册路由...
Route::get('manage/register', 'Auth\AuthController@getRegister');
Route::post('manage/register', 'Auth\AuthController@postRegister');

Route::group(['domain' => '{subDomain}.simple-site.cn'], function () {
    Route::get('/', function ($subDomain) {
        // 判断 subDomain 是否存在

        return view('themes/default/index', ['theme' => 'default']);
    });

    Route::get('/login', ['as' => 'login', 'uses' => 'UserController@login']);
});

Route::get('/manage/dashboard', function () {
    return view('themes/manage/dashboard', ['theme' => 'webapp']);
});

Route::get('/manage/signin', function () {
    return view('themes/manage/signin', ['theme' => 'webapp']);
});