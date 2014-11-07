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


Route::get('/', 'MustdosController@index');

Route::get('login', array('as' => 'login', 'uses' => 'UsersController@login'));
Route::post('/login', array('as' => 'login', 'uses' => 'UsersController@handleLogin'));

Route::model('mustdos', 'Mustdo');
Route::model('entries', 'Entry');
Route::model('items', 'Item');

Route::resource('mustdos', 'MustdosController');
Route::resource('mustdos.entries', 'EntriesController');
Route::resource('mustdos.entries.items', 'ItemsController');

Route::resource('user', 'UsersController'); 
Route::get('/profile', array('as' => 'profile', 'uses' => 'UsersController@profile'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'UsersController@logout'));