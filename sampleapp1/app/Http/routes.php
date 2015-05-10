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

// get
Route::get('/', 'ArticlesController@index');
Route::get('articles/index', 'ArticlesController@index');
Route::get('articles/show/{id}', 'ArticlesController@show');
Route::get('articles/edit/{id}', 'ArticlesController@edit');
Route::get('articles/destroy/{id}', 'ArticlesController@destroy');

// post
Route::post('articles/store', 'ArticlesController@store');
Route::post('articles/update/{id}', 'ArticlesController@update');

// resource
Route::resource('articles', 'ArticlesController');
