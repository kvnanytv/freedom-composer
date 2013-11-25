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



Route::get('/', 'HomeController@index');

Route::get('/application/step1', function(){
	return View::make('pages.step1');
});

Route::get('/application/step2', function(){
	return View::make('pages.step2');
});
