<?php

use App\Http\Controllers\UserAuthenticateController;



//User side routes

Route::get('/login', 'UserAuthenticateController@ShowLogin')->name('user.login.show');
Route::post('/login', 'UserAuthenticateController@Login')->name('user.login');
Route::get('/register', 'UserAuthenticateController@showRegister')->name('user.register.show');
Route::post('/register', 'UserAuthenticateController@Register')->name('user.register');


Route::group(['middleware' => 'userCheck'], function (){
    Route::get('/', 'UserAuthenticateController@index')->name('data.show');
    Route::get('/post/{id}/show', 'FormController@showPost')->name('user.show.post');
    Route::post('/post/{id}/comment', 'FormController@comment')->name('user.post.comment');
    Route::post('/post/{id}/updateComment/{postId}', 'FormController@updateComment')->name('user.comment.edit');
    Route::get('/user/logout', 'UserAuthenticateController@logout')->name('user.logout');
});

//Admin side routes
Route::get('/admin/login', 'AdminController@showLogin')->name('admin.login.show');
Route::post('/admin/login', 'AdminController@login')->name('admin.login');


Route::group(['middleware' => 'adminCheck'], function (){
    Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
    Route::get('/admin/create-post', 'AdminController@showPost')->name('admin.show.post');
    Route::post('/admin/create-post', 'AdminController@post')->name('admin.post');
    Route::get('/admin/showallpost', 'AdminController@showAllPost')->name('admin.post.all');
    Route::get('/admin/role', 'AdminController@role')->name('admin.role');
    Route::get('/admin/{id}/show-post', 'AdminController@postIndi')->name('admin.post.show');
    Route::get('/admin/{id}/updateRole', 'AdminController@updateRole')->name('admin.role.update');
    Route::post('/admin/{id}/comment', 'AdminController@postComment')->name('admin.post.comment');
    Route::post('/admin/{id}/updateComment/{postId}', 'AdminController@updateComment')->name('admin.comment.edit');
    Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');
});








