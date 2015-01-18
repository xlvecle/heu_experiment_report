<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/', 'MainController');
Route::get('index', 'MainController@index');
Route::get('{subject}', 'MainController@show');
Route::resource('pages', 'PageController');
Route::get('test/{id}', 'PageController@index');