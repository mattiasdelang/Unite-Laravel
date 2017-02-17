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

Route::get('/', function () { return view('welcome'); });

Route::get('/login', 'UsersController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

Route::get('/register', 'UsersController@getRegister');
Route::post('/register','Auth\AuthController@postRegister');

Route::get('/index', 'UsersController@getIndex');

Route::get('/choose', 'CommunityController@getChoose');
Route::post('/choose','CommunityController@postChoose');

Route::get('/newcomm', 'CommunityController@getComm');
Route::post('/newcomm','CommunityController@postComm');