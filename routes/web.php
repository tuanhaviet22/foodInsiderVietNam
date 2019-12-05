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
    return view('welcome');
});

Route::group(['prefix' => 'admin','namespace' => "Admin"], function () {
    Route::get('home', "Home@index");

    Route::get('login','Authenticate@Index')->name('get_login');
    Route::post('login', 'Authenticate@login')->name('post_login');
    
});
