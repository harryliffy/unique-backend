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
    return view('pages.index');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/signin', function () {
    return view('admin.user-login-v2');
});
Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/admins/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admins/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login.submit');
Route::get('/admins', 'AdminController@index')->name('admin.dashboards');