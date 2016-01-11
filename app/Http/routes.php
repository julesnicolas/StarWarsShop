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
// show the current basket
Route::get('basket/', 'FrontController@showCurrentBasket');

//Dashboard
Route::resource('dashboard/product', 'ProductsController');


