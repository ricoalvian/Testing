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

//Route::get('/', function()
//{
	//return View::make('hello');
//});

Route::get('/', 'MataAjarController@index');
Route::post('mataajar/input', 'MataAjarController@input');
Route::get('mataajar/hapus/{id}', 'MataAjarController@hapus');
Route::get('mataajar/edit/{id}', 'MataAjarController@edit');
Route::post('mataajar/doupdate', 'MataAjarController@doEdit');
