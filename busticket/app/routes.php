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

Route::get('/login', function()
{
	return View::make('login');
});

Route::post('/tryLogin','UserController@login');

Route::get('/register', function()
{
	return View::make('register');
});

Route::post('/willRegister','UserController@register');

Route::get('/editform', function()
{
	return View::make('editform');
});
Route::post('/willRegister','UserController@edit');


Route::get('/fin', function()
{
	return View::make('fin');
});

Route::get('/bkk-cm', function()
{
	return View::make('bkk-cm');
});

Route::get('/bkk-cr', function()
{
	return View::make('bkk-cr');
});
Route::get('/bkk-kk', function()
{
	return View::make('bkk-kk');
});
Route::get('/bkk-nsr', function()
{
	return View::make('bkk-nsr');
});
Route::get('/bkk-ud', function()
{
	return View::make('bkk-ud');
});

Route::get('/home', function()
{
	return View::make('home');
});

Route::get('/howto', function()
{
	return View::make('howto');
});

Route::get('/check', function()
{
	return View::make('check');
});

Route::get('/index', function()
{
	return View::make('index');
});


?>