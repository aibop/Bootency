<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('auth')->namespace('Auth')->group(function () {
    // facebook
    Route::get('facebook', 'ThirdLoginController@facebookRedirect');
    Route::get('facebook/callback', 'ThirdLoginController@facebookCallback');

    // google
    //Route::get('google', 'ThirdLoginController@redirect');
    //Route::get('google/callback', 'ThirdLoginController@callback');
});