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

Route::get('/name', 'TestController@name');
Route::get('/profile', 'TestController@profile');
Route::get('/occupation', 'TestController@occupation');
Route::get('/address', 'TestController@address');
Route::get('/number', 'TestController@number');
Route::get('/live', function (){
    return "Live";
});
Route::get('/earth', function (){
    return "Earth";
});
Route::get('/world', function (){
    return "World";
});
Route::get('/country', function (){
    return "Country";
});
Route::get('/environment', function (){
    return "Environment";
});

