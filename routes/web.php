<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/messi', function ()    {
        // Uses Auth Middleware
        return "Hello World!";
    });
    Route::get('/admin', function () {
    return view('home');
 });
    Route::get('/admin/gallery','adminController@gallery');
    Route::get('/admin/gallery/add',function(){
         return view('gallery_add');
    });
    Route::post('/admin/gallery/add','adminController@gallery_add');
});

Route::get('/home', 'HomeController@index');
