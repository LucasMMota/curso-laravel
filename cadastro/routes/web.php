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
    return view('index');
});

Route::get('/produtos', 'ProdutoController@index');

Route::prefix('categorias')->group(function () {
    Route::get('/', 'CategoriaController@index')->name('categorias.index');
    Route::get('/novo', 'CategoriaController@create');
    Route::post('/', 'CategoriaController@store');
    Route::get('/remover/{id}', 'CategoriaController@destroy');
    Route::get('/editar/{id}', 'CategoriaController@edit');
    Route::post('/editar/{id}', 'CategoriaController@update');
});
