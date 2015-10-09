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
	 return Redirect::to('home');
});

Route::controller('home', 'HomeController');


// Backend
Route::controller('admin/user', 'Admin_UserController');
Route::controller('admin', 'AdminController');
