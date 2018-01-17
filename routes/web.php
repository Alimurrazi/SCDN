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
         return view('admin.gallery_add');
    });
    Route::post('/admin/gallery/add','adminController@gallery_add');
    Route::get('/admin/gallery/update/{id}','adminController@gallery_update_first');
    Route::post('/admin/gallery/update/{id}','adminController@gallery_update_second');
    Route::get('/admin/gallery/delete/{id}','adminController@gallery_delete');

    Route::get('/admin/developer_list','adminController@developer_list');
    Route::get('/admin/developer/add',function(){
         return view('admin.developer_add');
    });
   Route::post('/admin/developer/add','adminController@developer_add');
   
   Route::get('admin/announcement','adminController@announcement');
   Route::get('/admin/announcement/add',function(){
         return view('admin.announcement_add');
    }); 
   Route::post('admin/announcement/add','adminController@announcement_add');

});

Route::get('/gallery','galleryController@index');

Route::get('/developer_list','developerController@index');
Route::get('/developer_list/specific/{id}','developerController@specific');
Route::get('/announcement','announcementController@index');

Route::get('/home', 'HomeController@index');
