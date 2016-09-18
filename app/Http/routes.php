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

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

Route::get('about', ['as' => 'about', 'uses' => 'IndexController@about']);

Route::any('home', ['as' => 'home', 'uses' => 'HomeController@home']);

Route::get('filter', ['as' => 'filter', 'uses' => 'HomeController@filter']);

Route::get('login', ['as' => 'login', 'uses' => 'UserController@login']);

Route::get('register', ['as' => 'register', 'uses' => 'UserController@register']);

Route::post('register', ['as' => 'postRegister', 'uses' => 'UserController@postRegister']);

Route::get('trip', ['as' => 'addTrip', 'uses' => 'TripController@create']);
Route::post('trip', ['as' => 'newTrip', 'uses' => 'TripController@post']);

Route::get('group', ['as' => 'addGroup', 'uses' => 'GroupController@create']);
Route::post('group', ['as' => 'newGroup', 'uses' => 'GroupController@post']);

Route::get('group/{id}', ['as' => 'group', 'uses' => 'GroupController@show']);
Route::get('trip/{id}', ['as' => 'trip', 'uses' => 'TripController@show']);
Route::get('message/{id}', ['as' => 'message', 'uses' => 'MessageController@post']);
