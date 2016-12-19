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

Route::get('/', [
	'uses' => 'PagesController@getIndex',
	'as' => '/']);


Route::get('contacts', [
	'uses' => 'PagesController@getContacts',
	'as' => 'contacts']);

Route::get('about', [
	'uses' => 'PagesController@getAbout',
	'as' => 'about']);

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('goods', 'GoodsController');
Route::get('goods+1', 'GoodsController@getFirstFilter');
Route::get('goods+2', 'GoodsController@getSecondFilter');
Route::get('goods+3', 'GoodsController@getThirdFilter');
