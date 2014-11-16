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

Route::get('/home',array('before' => 'checkAuth','after' => 'checkAuth',function(){
     return View::make('home');
  }));


Route::get('/searchMember',array('before' => 'checkAuth', function()
{
  return View::make('searchMember');
}));



Route::post('/cancelBook','ReservingController@cancel');
//Route::get('/cancelBooking','ReservingController@show');



Route::get('/cancelBooking',array('before' => 'checkAuth', function()
{
  return View::make('cancelBooking');
}));


Route::post('/searchTrip','PathController@search');

Route::post('/reservation','ReservingController@reserving');

Route::get('/',function(){
  return View::make('index');
});

Route::get('/login',function()
{
  return View::make('login');
});

Route::post('/tryLogin','UserController@login');

Route::post('/addPath','PathController@add');

Route::get('/addPath',array('before' => 'checkAuth',function()
{
  return View::make('addPath');
}));

Route::get('/showPath',function()
{
  return View::make('showPath');
});


Route::get('/updateStatus',function()
{
  return View::make('updateStatus');
});

Route::post('/updateStatus','ReservingController@update');



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
Route::post('/willEditName','UserController@editName');

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

Route::get('/checkMember','ReservingController@show');

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