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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('products', [
    'as' => 'products.index',
    'uses' => 'ProductsController@index',
]);

Route::get('products/create', [
    'as' => 'products.create',
    'uses' => 'ProductsController@create',
]);

Route::post('products', [
    'as' => 'products.store',
    'uses' => 'ProductsController@store',
]);
