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


Route::get('/dash', function () {
    return view('admin.dashboard');
});

  Route::get('/home', function(){
        return view('pages.index');
    })->name('home');

      Route::get('/admin/add-news', function(){
        return view('admin.add-news');
    })->name('addnews');


Auth::routes();

//facebook login
Route::get('login/facbook', 'Auth\LoginController@redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::post('/login/custom',[
    'uses'=> 'LoginController@login',
    'as' => 'login.custom'
]);

Route::group(['middleware' =>'auth'], function(){

  
    Route::get('/admin/dashboard', 'LoginController@admin')->name('admin.dashboard');

});