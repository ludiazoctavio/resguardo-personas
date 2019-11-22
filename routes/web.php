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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/persons', 'PersonController@index')->name('persons')->middleware('auth');

Route::get('dependencia/personas', 'DependenceController@index')->name('dependences')->middleware('auth');
