<?php

use App\Http\Controllers\UserAuthenticateController;

//Route::group(['middleware' => 'checkDaroan'], function (){
////    Route::get('/', 'FormController@payementPage');
//    Route::get('/payment/get', 'FormController@payementGet');
//    Route::post('/payment/post', 'FormController@payementPost');
//    Route::get('/task/{id}/edit', 'FormController@edit')->name('data.edit.show');
//    Route::post('/task/{id}/edit', 'FormController@update')->name('data.edit.update');
//    Route::get('/task/{id}/delete', 'FormController@delete')->name('data.delete');

//});



//User side routes

Route::get('/login', 'UserAuthenticateController@ShowLogin')->name('user.login.show');
Route::post('/login', 'UserAuthenticateController@Login')->name('user.login');
Route::get('/register', 'UserAuthenticateController@showRegister')->name('user.register.show');
Route::post('/register', 'UserAuthenticateController@Register')->name('user.register');


Route::group(['middleware' => 'userCheck'], function (){
    Route::get('/', 'UserAuthenticateController@index')->name('data.show');
    Route::get('/about', 'FormController@show');
    Route::get('/user/logout', 'UserAuthenticateController@logout')->name('user.logout');
});

//Admin side routes
Route::get('/admin/login', 'AdminController@showLogin')->name('admin.login.show');
Route::post('/admin/login', 'AdminController@login')->name('admin.login');


Route::group(['middleware' => 'adminCheck'], function (){
    Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
    Route::get('/admin/logout', 'AdminController@logout');
});








