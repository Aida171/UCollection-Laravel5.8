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


Route::get('/', 'PagesController@homepage');

Route::get('about', 'PagesController@about');

Auth::routes();

Route::get('mobil', 'MobilController@index');

Route::get('mobil/create', 'MobilController@create');

Route::get('mobil/{mobil}', 'MobilController@show');

Route::post('mobil', 'MobilController@store');

Route::get('mobil/{mobil}/edit', 'MobilController@edit');

Route::patch('mobil/{mobil}', 'MobilController@update');
		
Route::delete('mobil/{mobil}', 'MobilController@destroy');

Route::resource('produsen', 'ProdusenController');

Route::resource('user', 'UserController');
