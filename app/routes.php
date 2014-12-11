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

Route::get('/', function()
{
	return Redirect::to('login');
});

Route::get('jobs', function()
{
	return View::make('jobs');
});

Route::resource('user', 'UsersController');

// Route::get('register', 'UsersController@create');

Route::get('login', array('as' => 'login', 'uses' => 'UsersController@login'));
Route::get('logout', array('as' => 'logout', 'uses' => 'UsersController@logout'));
Route::post('/login', array('as' => 'login', 'uses' => 'UsersController@handleLogin'));

Route::get('profile/{id}', 'UsersController@show');
Route::get('edit/{id}', 'UsersController@edit');
Route::get('delete/{id}', 'UsersController@delete');