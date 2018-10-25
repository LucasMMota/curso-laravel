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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// primeiro esse

//    // ==> acrescentar
//    Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');
//    Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//    
//    
//    // ==> troquei de lugar
//    Route::get('/admin', 'AdminController@index')->name('admin.dashboard');


// depois esse
Route::prefix('/admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@index')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});








