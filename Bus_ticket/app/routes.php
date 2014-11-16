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



Route::get('/homeAdmin', function()
{
  return View::make('homeAdmin');
});

Route::get('/search',function()
{
  return View::make('search');
});

Route::get('/home',function(){
 return View::make('home');
});


Route::get('/searchMember', function()
{
  return View::make('searchMember');
});


Route::post('/searchTrip','PathController@search');

Route::get('/index',function(){
  return View::make('index');
});

Route::get('/',function(){
  return View::make('index');
});

Route::get('/login',function()
{
  return View::make('login');
});

Route::post('/tryLogin','UserController@login');

Route::post('/addPath','PathController@add');

Route::get('/addPath',function()
{
  return View::make('addPath');
});

Route::get('/showPath',function()
{
  return View::make('showPath');
});


Route::get('/showPathAdmin',function()
{
  return View::make('showPathAdmin');
});


Route::get('/showPathMember',function()
{
  return View::make('showPathMember');
});

Route::post('/logout','UserController@logout');

Route::get('/register', function()
{
  return View::make('register');
});



Route::post('/willRegister','UserController@register');

Route::post('/willEditTelephone','UserController@editTel');
Route::post('/willEditPassword','UserController@editPass');
Route::post('/willEditName','UserController@editName');

Route::get('/editformMember', function()
{
  return View::make('editformMember');
});
//Route::post('/willRegister','UserController@edit');


Route::get('/a', function()
{
  return View::make('tring');
});


Route::get('/howtoMember',function()
{
  return View::make('howtoMember');
});





Route::get('/fin', function()
{
  return View::make('fin');
});


Route::get('/howto', function()
{
  return View::make('howto');
});

Route::get('/checkMember', function()
{
  return View::make('checkMember');
});


Route::get('/checkAdmin', function()
{
  return View::make('checkAdmin');
});


Route::get('/booking', 
  function()
  {
    return View::make('booking');
  });

Route::post('/cancelBook','ReservingController@cancel');
//Route::get('/cancelBooking','ReservingController@show');



Route::get('/cancelBooking',function()
{
  return View::make('cancelBooking');
});



?>