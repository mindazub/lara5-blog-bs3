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

Route::get('/', ['as'=>'home', 'uses' =>'FirstController@index']);

Route::get('about', ['as'=>'about', 'uses' =>'FirstController@about']);

Route::get('contact', ['as'=>'contact', 'uses' =>'FirstController@contact']);

Route::get('posts/{id}', ['as'=>'postShow', 'uses' =>'FirstController@postShow']);





Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
