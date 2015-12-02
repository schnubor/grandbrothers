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

/* === Backend === */

Route::group(array('before' => 'auth'), function()
{
  Route::get('/backend', [
    'as' => 'backend',
    'uses' => 'BackendController@index'
  ]);

  /**
   * Users, News, Dates
   */

  Route::resource('user', 'UsersController');
  Route::resource('news', 'NewsController');
  Route::resource('date', 'DatesController');
  Route::resource('image', 'ImagesController');

  /**
   * Sessions
   */

  Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'SessionsController@destroy'
  ]);
});

/**
 * Home
 */

Route::get('/', [
  'as' => 'home',
  'uses' => 'PagesController@home'
]);

/**
 * Sessions
 */

Route::get('/login', [
  'as' => 'login',
  'uses' => 'SessionsController@create'
]);

Route::post('/login', [
  'as' => 'login',
  'uses' => 'SessionsController@store'
]);
