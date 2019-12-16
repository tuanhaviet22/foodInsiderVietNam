<?php
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin','namespace' => "Admin"], function () {
    Route::get('/', "Home@index")->name('admin');

    Route::get('login','Authenticate@Index')->name('get_login');
    Route::post('login', 'Authenticate@login')->name('post_login');
    Route::group(['prefix' => 'manage'], function () {
        Route::get('add', "ManageAdmin@add_admin_page")->name('manage_add');
        Route::post('add' , "ManageAdmin@register_admin")->name('post_manage_add');
    });
});
