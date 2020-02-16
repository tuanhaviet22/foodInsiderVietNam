<?php
Route::get('/', function () {
    return view('welcome');
});

// Not Auth
Route::group(['prefix' => 'admin' , 'namespace' => 'admin'], function()
{
	Route::get('login','Authenticate@Index')->name('get_login');
	Route::post('login', 'Authenticate@login')->name('post_login');	
});


// Auth admin
Route::group(['prefix' => 'admin','namespace' => "Admin", 'middleware' => "admin.auth"], function () {
    Route::get('/', "Home@index")->name('admin');
    Route::group(['prefix' => 'manage'], function () {
        Route::get('add', "ManageAdmin@add_admin_page")->name('manage_add');
        Route::post('add' , "ManageAdmin@register_admin")->name('post_manage_add');
    });

});
