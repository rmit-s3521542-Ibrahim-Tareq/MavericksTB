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
Route::resource('account', 'AccountController');
Route::post('/payment', 'PaymentController@index');
Route::get('/payment', 'PaymentController@index');
Route::post('/paymentconfirm', 'PaymentController@store');
Route::get('/', 'HomeController@index');
Route::get('/movies', 'MovieController@showDefault');
Route::post('/movies', 'MovieController@loadMovies');
Route::post('/wishlist', 'MovieController@addWishlist');
Route::get('/search', 'SearchController@process');
Route::get('/fbLogin', 'SocialController@loginWithFacebook');
Route::get('/returnauth', 'SocialController@handleProviderCallback');
Route::get('/admin', 'AdminController@index');
Route::group(array('prefix' => 'admin'), function() {
    Route::resource('movies', 'AdminMovieController');
    Route::resource('hot', 'AdminHotController');
    Route::resource('carousel', 'AdminCarouselController');
});