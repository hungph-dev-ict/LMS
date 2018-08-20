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

Route::get('/home', function () {
    return view('users.home');
})->name('home');

Auth::routes();

Route::group(['namespace' => 'Users'], function () {
    Route::resource('users', 'UserController')->only('show');
    Route::post('users/{id}/update', 'UserController@update');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admins.'], function () {
    Route::get('/', 'AdminController@index')->name('adminDashboard');

    Route::resource('specializes', 'SpecializeController')->except('create', 'show');

    Route::resource('categories', 'CategoryController')->except('create', 'show');
});
