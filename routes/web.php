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

Route::get('/', function () {
    return view('welcome');
});


Route::resource( 'tweets', 'TweetController' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('teams/{team}', 'TeamController@show')->name('teams.show');

Route::get('/teams', 'TeamController@index')->name('teams');