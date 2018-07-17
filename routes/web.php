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

Route::get('/ola', function () {
    return '<h1>Olá seja bem vindo</h1>';
});

Route::get('/ola/{nome}/', function ($nome) {
    return "<h1>Olá, $nome!</h1>";
});

Route::get('/seunomecomregra/{nome}/{n}/', function ($nome, $n) {
    return "<h1>Olá, $nome! [$n]</h1>";
})
    ->where('n', '[0-9]+')
    ->where('nome', '[a-zA-Z]+');

Route::get('/seunomesemregra/{nome?}', function ($nome = null) {
    if (isset($nome))
        echo "<h1>Olá, $nome!</h1>";
    echo 'nenhum nome';
});

Route::prefix('app')->group(function () {
    Route::get("/", function () {
        return "Página principal";
    });
    Route::get("profile", function () {
        return "profile";
    });
    Route::get("about", function () {
        return "about";
    });
});

Route::redirect('/aqui', '/ola', 301);// redireciona de /aqui para /ola

Route::view('/hello', 'hello'); // carrega a view

Route::view('/viewnome', 'hellonome', ['nome' => 'Lucas', 'sobrenome' => "Fonseca"]); // passa as variaveis para view

Route::get('/hellonome/{nome}/{sobrenome}', function ($nome, $sn) { // passa as variaveis recebinas na uri para a view
    return view('hellonome', ['nome' => $nome, 'sobrenome' => $sn]);
});