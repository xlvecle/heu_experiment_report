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

Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'AuthController@getLogout'));  
Route::get('admin/login', array('as' => 'admin.login', 'uses' => 'AuthController@getLogin'));  
Route::post('admin/login', array('as' => 'admin.login.post', 'uses' => 'AuthController@postLogin'));
Route::post('admin/login', array('as' => 'admin.subject.store', 'uses' => 'AuthController@postLogin'));
Route::get('admin', 'AdminController@index');
Route::resource('admin/subject', 'AdminController');
Route::resource('admin/exp', 'ExpController');

Route::get('{subject}', 'MainController@show');
Route::get('{subject}/{exp}', 'PageController@show');
Route::resource('pages', 'PageController');
Route::get('test/{id}', 'PageController@index');
