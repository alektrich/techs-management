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
	return View::make('users.login');
});

Route::get('register', 'UsersController@register');
Route::get('login', array('as' => 'login', 'uses' => 'UsersController@login'));
Route::get('profile/{id}', 'UsersController@show');
Route::get('edit/{id}', 'UsersController@edit');
Route::get('delete/{id}', 'UsersController@delete');