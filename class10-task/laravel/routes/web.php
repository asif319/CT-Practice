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



Route::get('/name/{name}/{nick?}', 'TestController@name')
->where([
    'name' => '[A-Za-z]+',
    'nick' => '[A-Za-z]+'
]);
Route::get('/', 'TestController@home');
Route::get('/about', 'TestController@about');
Route::get('/services', 'TestController@services');
Route::get('/contact', 'TestController@contact');
Route::get('/class', 'TestController@classTask');
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
    return view('class');
});


