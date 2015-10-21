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

Route::get('', function()
{
	 return Redirect::to('home');
});

Route::get('/', function()
{
	 return Redirect::to('home');
});

Route::controller('home', 'HomeController');
Route::controller('cart', 'CartController');


// Backend
Route::controller('login', 'LoginController');
Route::group(array('before'=>'auth'),function()
{
	Route::controller('admin/product', 'Admin_ProductController');
	Route::controller('admin/user', 'Admin_UserController');
	Route::controller('admin', 'AdminController');
});
