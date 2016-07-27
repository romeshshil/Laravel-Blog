<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware' => 'admins'], function ()  {
	
   Route::get('/admin/home','DashboardController@index');



Route::get('/setting', function () {
    return view('admin.setting.index');
});

Route::get('/setting/id/1','SettingController@edit');
Route::post('/update/{id}','SettingController@update');


//User Route

Route::get('/user/list','AdminController@index');

Route::get('/user/create','AdminController@create');
Route::post('/user/create','AdminController@store');
Route::get('/user/edit/{id}','AdminController@edit');
Route::post('/user/update/{id}','AdminController@update');
Route::get('/user/delete/{id}','AdminController@delete');


Route::get('/setting/id/1','SettingController@edit');

//Service Route
Route::get('/service/list','ServiceController@index');
Route::get('/service/create','ServiceController@create');
Route::post('/service/create','ServiceController@store');
Route::get('/service/delete/{id}','ServiceController@delete');
Route::get('/service/edit/{id}','ServiceController@edit');
Route::post('/service/update/{id}','ServiceController@update');

//Slider Route 



Route::get('/slider/list','SliderController@index');
Route::get('/slider/create','SliderController@create');
Route::post('/slider/create','SliderController@store');
Route::get('/slider/edit/{id}','SliderController@edit');
Route::post('/slider/update/{id}','SliderController@update');
Route::get('/slider/delete/{id}','SliderController@delete');

//Category Route

Route::get('/category/list','CategoryController@index');

Route::get('/category/create','CategoryController@create');
Route::post('/category/create','CategoryController@store');
Route::get('/category/edit/{id}','CategoryController@edit');
Route::post('/category/update/{id}','CategoryController@update');
Route::get('/category/delete/{id}','CategoryController@delete');


//Blog Route

Route::get('/blog/list','BlogController@index');

Route::get('/blog/create','BlogController@create');
Route::post('/blog/create','BlogController@store');
Route::get('/blog/edit/{id}','BlogController@edit');
Route::post('/blog/update/{id}','BlogController@update');
Route::get('/blog/delete/{id}','BlogController@delete');


//Team Route

Route::get('/team/list','TeamController@index');

Route::get('/team/create','TeamController@create');
Route::post('/team/create','TeamController@store');
Route::get('/team/edit/{id}','TeamController@edit');
Route::post('/team/update/{id}','TeamController@update');
Route::get('/team/delete/{id}','TeamController@delete');


});



//Login




Route::get('/admin/login','Admin\AuthController@login');

Route::post('/admin/login','Admin\AuthController@doLogin');

Route::get('admin/logout','AdminController@getLogout');




