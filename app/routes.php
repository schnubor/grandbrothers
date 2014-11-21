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
    'as' => 'home_path',
    'uses' => 'PagesController@home'
]);

Route::get('/login', [
    'as' => 'login_path',
    'uses' => 'AccountsController@index'
]);



/* === Backend === */

Route::group(array('before' => 'auth'), function()
{
    Route::get('/backend', [
        'as' => 'backend_path',
        'uses' => 'BackendController@index'
    ]);
});