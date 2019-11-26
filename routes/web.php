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
    Route::get('user/{user}/assign_role', 'UserController@assign_role')->name('user.assign_role');
    Route::post('user/{user}/role_assignment', 'UserController@role_assignment')->name('user.role_assignment');
    Route::get('user/{user}/assign_permission', 'UserController@assign_permission')->name('user.assign_permission');
    Route::post('user/{user}/permission_assignment', 'UserController@permission_assignment')->name('user.permission_assignment');
    Route::resource('permission', 'PermissionController');
    Route::resource('dependence', 'DependenceController');
    Route::resource('person', 'PersonController');
    Route::resource('report', 'ReportController');
    Route::resource('search', 'SearchController');
});

//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
