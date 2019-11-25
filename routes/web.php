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

//Dashboard
Route::group(['middleware' => ['auth'], 'as' => 'dashboard.'], function () {
    Route::resource('user', 'UserController');
    Route::resource('role', 'RoleController');
    Route::resource('permission', 'PermissionController');
    Route::resource('dependence', 'DependenceController');
    Route::resource('person', 'PersonController');
    Route::resource('report', 'ReportController');
    Route::resource('search', 'SearchController');
});

//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
