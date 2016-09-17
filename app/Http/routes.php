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

Route::get('home', ['as' => 'home', 'uses' => 'HomeController@home']);

Route::get('filter', ['as' => 'filter', 'uses' => 'HomeController@filter']);
