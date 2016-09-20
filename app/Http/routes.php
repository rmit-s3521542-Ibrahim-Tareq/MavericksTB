<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', 'HomeController@index');

Route::get('/cart', 'CartController@show');

Route::get('/movies', 'MovieController@showDefault');

Route::get('/account', 'AccountController@show');

Route::get('/admin', 'AdminController@index');