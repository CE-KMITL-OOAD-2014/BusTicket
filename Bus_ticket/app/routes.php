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



Route::get('/addadmin', function()
{
  return View::make('addadmin');
});

Route::get('/search', array(
    'before' => 'checkAuth',function()
{
  return View::make('search');
}));

Route::get('/searchMember', function()
{
  return View::make('searchMember');
});


Route::post('/searchTrip','PathController@search');



Route::get('/', array(
    'before' => 'checkAuth',
    function()
  {
  return View::make('public/index');
}));

Route::get('/login', array(
    'before' => 'checkAuth',function()
{
  return View::make('login');
}));

Route::post('/tryLogin','UserController@login');

Route::post('/addPath_hide','PathController@add');

Route::get('/addPath',function()
{
  return View::make('addPath_hide');
});

Route::post('/showPath','PathController@show');

Route::post('/showPathAdmin','PathController@show');

Route::post('/showPathMember','PathController@show');

Route::post('/logout','UserController@logout');

Route::get('/register', function()
{
  return View::make('register');
});



Route::post('/willRegister','UserController@register');

Route::post('/willEditTelephone','UserController@editTel');
Route::post('/willEditPassword','UserController@editPass');

Route::get('/editformMember', function()
{
  return View::make('editformMember');
});
//Route::post('/willRegister','UserController@edit');


Route::get('/a', function()
{
  return View::make('tring');
});


Route::get('/howtoMember', array(
    'before' => 'checkAuth',function()
{
  return View::make('howtoMember');
}));





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

Route::get('/home', array(
    'before' => 'checkAuth',function()
{
  return View::make('home');
}));

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


Route::get('/booking', array(
    'before' => 'checkAuth',
  function()
  {
  return View::make('booking');
}));



Route::get('/', function()
{
  return View::make('index');
});



?>