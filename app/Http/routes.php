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

Route::resource('cart', 'CartController');
Route::get('/cart', 'CartController@index');
Route::post('/cart', 'CartController@store');
Route::post('/payment', 'PaymentController@index');

Route::get('/', 'HomeController@index');

Route::get('/movies', 'MovieController@showDefault');
Route::post('/movies', 'MovieController@loadMovies');

Route::get('/account', 'AccountController@show');

Route::get('/admin', 'AdminController@index');

Route::get('/search', 'SearchController@process');
Route::get('/search/{term}', ['uses' => 'SearchController@search']);
Route::get('/fbLogin', 'AuthController@loginWithFacebook');
Route::get('returnauth', 'AuthController@handleProviderCallback');

