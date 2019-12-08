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
    Route::get('/', "Home@index")->name('admin');

    Route::get('login','Authenticate@Index')->name('get_login');
    Route::post('login', 'Authenticate@login')->name('post_login');
    Route::group(['prefix' => 'manage'], function () {
        Route::get('add', "ManageAdmin@add_admin_page");
    });
});
