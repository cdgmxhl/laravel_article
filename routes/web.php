<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    session(['key' => 'value']);
    dd(session('key'));
    // return view('welcome');
});


// Route::resource('/article','ArticleController');

Route::group(['middleware' => 'loginMid'],function(){
    Route::resource('/article','ArticleController');
});


Route::match(['get','post'],'/register', 'LoginController@register');

Route::match(['get','post'],'/login', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');


