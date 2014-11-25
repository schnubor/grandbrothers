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

Route::get('/', [
  'as' => 'home',
  'uses' => 'PagesController@home'
]);

/**
 * Sessions
 */

Route::get('/login', [
  'as' => 'login_path',
  'uses' => 'SessionsController@create'
]);

Route::post('/login', [
  'as' => 'login_path',
  'uses' => 'SessionsController@store'
]);

Route::get('/logout', [
  'as' => 'logout_path',
  'uses' => 'SessionsController@destroy'
]);


/* === Backend === */

Route::group(array('before' => 'auth'), function()
{
  Route::get('/backend', [
    'as' => 'backend_path',
    'uses' => 'BackendController@index'
  ]);
});