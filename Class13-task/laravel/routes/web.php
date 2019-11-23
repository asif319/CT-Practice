<?php

Route::group(['middleware' => 'checkDaroan'], function (){
    Route::get('/', 'FormController@payementPage');
    Route::get('/payment/get', 'FormController@payementGet');
    Route::post('/payment/post', 'FormController@payementPost');
    Route::get('/task/{id}/edit', 'FormController@edit')->name('data.edit.show');
    Route::post('/task/{id}/edit', 'FormController@update')->name('data.edit.update');
    Route::get('/task/{id}/delete', 'FormController@delete')->name('data.delete');
    Route::get('/about', 'FormController@show');
    Route::get('/logout', 'LoginController@logout');
});


Route::get('/register', 'RegisterController@show')->name('user.register.show');
Route::post('/register', 'RegisterController@register')->name('user.register');
Route::get('/login', 'LoginController@show')->name('user.login.show');
Route::post('/login', 'LoginController@login')->name('user.login');


//Admin routes
Route::get('/admin/login', 'AdminController@index')->name('admin.login.show');
Route::post('/admin/login', 'AdminController@login')->name('admin.login');
Route::get('/logout', 'AdminController@logout');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard')->middleware('adminCheck');







