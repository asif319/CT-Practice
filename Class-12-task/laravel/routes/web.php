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




//Route::get('/', 'TestController@home');



//Route::get('/', 'TestController@view')->middleware('checkDaroan');

//Route::group(['prefix' => 'user', 'middleware' => 'checkDaroan'], function (){
//    Route::get('/content', 'TestController@view');
//});
Route::get('/', 'PayementController@payementPage')->middleware('checkDaroan');
Route::get('/payment/get', 'PayementController@payementGet');
Route::post('/payment/post', 'PayementController@payementPost');

Route::get('/task/{id}/edit', 'PayementController@edit')->name('data.edit.show');
Route::post('/task/{id}/edit', 'PayementController@update')->name('data.edit.update');
Route::get('/task/{id}/delete', 'PayementController@delete')->name('data.delete');
//Route::get('/profile', 'JournalController@journalPage');
//Route::get('/profile/getData', 'JournalController@journalGet');
//Route::post('/profile/postData', 'JournalController@journalPost');
//
//Route::get('/contact', 'ProductController@productPage');
//
//Route::get('/services', 'ShopController@shopGet');
Route::get('/about', 'PayementController@show');






