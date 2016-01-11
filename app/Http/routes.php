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

// show the home page product listing
Route::get('/', 'FrontController@showAll');
// show the page of the product n° N + order form
Route::get('product/{n}', 'FrontController@showSingle');
Route::post('product/{n}', 'FrontController@order');
// show the current basket

Route::get('basket', 'FrontController@showCurrentBasket');
// show the current basket
Route::get('category/{n}', 'FrontController@showByCat');
//Dashboard
Route::resource('dashboard/product', 'ProductsController');

Route::get('basket/', 'FrontController@showCurrentBasket');
//Dashboard
Route::resource('dashboard/product', 'ProductsController');


// Authentication routes...

Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes...

Route::get('auth/register', 'Auth\AuthController@getRegister');

Route::post('auth/register', 'Auth\AuthController@postRegister');


// Password reset link request routes...

Route::get('password/email', 'Auth\PasswordController@getEmail');

Route::post('password/email', 'Auth\PasswordController@postEmail');


// Password reset routes...

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');

Route::post('password/reset', 'Auth\PasswordController@postReset');

