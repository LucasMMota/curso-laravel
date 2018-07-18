<?php

use Illuminate\Http\Request;

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
    return view('pagina');
});

// Controller
//Route::get('/nome', 'MeuControlador@getNome');
//
//Route::get('/idade', 'MeuControlador@getIdade');
//
//Route::get('/multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');
//
//Route::get('/nomes/{id}', 'MeuControlador@getNomeByID');
//
//Route::resource('/cliente', 'ClienteController'); // cria as rotas do controller automaticamente
//
//Route::post('/cliente/requisitar', 'ClienteController@requisitar');

// View

Route::get('/ola/{nome}/{sobrenome}', function ($nome, $sobrenome) {
//    return view('minhaview')->with('nome', 'João')->with('sobrenome', 'Silva');
//    return view('minhaview', ['nome' => $nome, 'sobrenome' => $sobrenome]);
    return view('minhaview', compact('nome', 'sobrenome'));
});

Route::get('/email/{email}', function ($email) {
    if (View::exists('email'))
        return view('email', compact('email'));
    return view('erro');
});

//
//Route::get('/ola', function () {
//    return '<h1>Olá seja bem vindo</h1>';
//});
//
//Route::get('/ola/{nome}/', function ($nome) {
//    return "<h1>Olá, $nome!</h1>";
//});
//
//Route::get('/seunomecomregra/{nome}/{n}/', function ($nome, $n) {
//    return "<h1>Olá, $nome! [$n]</h1>";
//})
//    ->where('n', '[0-9]+')
//    ->where('nome', '[a-zA-Z]+');
//
//Route::get('/seunomesemregra/{nome?}', function ($nome = null) {
//    if (isset($nome))
//        echo "<h1>Olá, $nome!</h1>";
//    echo 'nenhum nome';
//});
//
//Route::prefix('app')->group(function () {
//    Route::get("/", function () {
//        return "Página principal";
//    });
//    Route::get("profile", function () {
//        return "profile";
//    });
//    Route::get("about", function () {
//        return "about";
//    });
//});
//
//Route::redirect('/aqui', '/ola', 301);// redireciona de /aqui para /ola
//
//Route::view('/hello', 'hello'); // carrega a view
//
//Route::view('/viewnome', 'hellonome', ['nome' => 'Lucas', 'sobrenome' => "Fonseca"]); // passa as variaveis para view
//
//Route::get('/hellonome/{nome}/{sobrenome}', function ($nome, $sn) { // passa as variaveis recebinas na uri para a view
//    return view('hellonome', ['nome' => $nome, 'sobrenome' => $sn]);
//});
//
//Route::get('/rest/hello', function () {
//    return "Hello (GET)";
//});
//
//Route::post('/rest/hello', function () {
//    return "Hello (POST)";
//});
//
//Route::delete('/rest/hello', function () {
//    return "Hello (DELETE)";
//});
//
//Route::put('/rest/hello', function () {
//    return "Hello (PUT)";
//});
//
//Route::patch('/rest/hello', function () {
//    return "Hello (PATCH)";
//});
//
//Route::options('/rest/hello', function () {
//    return "Hello (OPTIONS)";
//});
//
//Route::post('/rest/imprimir', function (Request $req) {
//    $nome = $req->input('nome');
//    $idade = $req->input('idade');
//    return "Hello $nome ($idade)!! (POST)";
//});
//
//Route::match(['get', 'post'], '/rest/hello2', function () {
//    return 'Hello world 2';
//});
//
//Route::any('/rest/hello3', function () { // todos os metodos
//    return 'Hello world 2';
//});
//
//Route::get('/produtos', function () {
//    echo '<h1>Produtos</h1>';
//    echo '<ol><li>Notebook</li><li>Impressora</li><li>Mouse</li></ol>';
//})->name('meusprodutos');
//
//Route::get('/linkprodutos', function () {
//    $url = route('meusprodutos');
//    echo "<a href='$url'>Meus produtos</a>";
//});
//
//Route::get('/redirecionarprodutos', function () {
//    return redirect()->route('meusprodutos');
//});