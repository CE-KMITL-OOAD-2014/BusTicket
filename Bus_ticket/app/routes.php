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



Route::get('/Homeadmin', function()
{
  return View::make('Homeadmin');
});

Route::get('/search',function()
{
  return View::make('search');
});

Route::get('/home',array('before' => 'checkAuth','after' => 'checkAuth',function(){
     return View::make('home');
  }));


Route::get('/searchMember',array('before' => 'checkAuth', function()
{
  return View::make('searchMember');
}));


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

Route::post('/addPath_hide','PathController@add');

Route::get('/addPath',array('before' => 'checkAuth',function()
{
  return View::make('addPath_hide');
}));

Route::get('/showPath',function()
{
  return View::make('showPath');
});


Route::get('/showPathAdmin',array('before' => 'checkAuth',function()
{
  return View::make('showPathAdmin');
}));


Route::get('/showPathMember',array('before' => 'checkAuth',function()
{
  return View::make('showPathMember');
}));

Route::post('/logout','UserController@logout');

Route::get('/register', function()
{
  return View::make('register');
});



Route::post('/willRegister','UserController@register');

Route::post('/willEditTelephone','UserController@editTel');
Route::post('/willEditPassword','UserController@editPass');

Route::get('/editformMember',array('before' => 'checkAuth', function()
{
  return View::make('editformMember');
}));
//Route::post('/willRegister','UserController@edit');


Route::get('/a', function()
{
  return View::make('tring');
});


Route::get('/howtoMember',array('before'=>'checkAuth','after'=>'checkAuth',function()
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



Route::get('/howto', function()
{
  return View::make('howto');
});

Route::get('/checkMember',array('before' => 'checkAuth', function()
{
  return View::make('checkMember');
}));


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





?>