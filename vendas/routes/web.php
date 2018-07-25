<?php

use Illuminate\Support\Facades\DB;

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

// Exemplo para pegar categorias
Route::get('/categorias', function () {
    $categorias = DB::table('categorias')->get();

    foreach ($categorias as $cat) {
        echo "ID: " . $cat->id . " | ";
        echo "Nome: " . $cat->nome . "<br> ";
    }

    echo "<hr>";

    $nomes = DB::table('categorias')->pluck('nome');
    foreach ($nomes as $nome) {
        echo $nome . "</br>";
    }

    echo "<hr>";

    $categorias = DB::table('categorias')->where('id', 1)->get();
    echo "ID: " . $categorias[0]->id . " | ";
    echo "Nome: " . $categorias[0]->nome . "<br> ";

    echo "<hr>";

    $categoria = DB::table('categorias')->first();
    echo "ID: " . $categoria->id . " | ";
    echo "Nome: " . $categoria->nome . "<br> ";

    echo "<hr>";

    echo "retorna um array utilizando like<br>";

    $categorias = DB::table('categorias')->where('nome', 'like', '%p%')->get();

    foreach ($categorias as $cat) {
        echo "ID: " . $cat->id . " | ";
        echo "Nome: " . $cat->nome . "<br> ";
    }

    echo "<hr>";

    echo "Sentenças lógicas<br>";

    $categorias = DB::table('categorias')->where('id', 1)->orWhere('id', 2)->get();

    foreach ($categorias as $cat) {
        echo "ID: " . $cat->id . " | ";
        echo "Nome: " . $cat->nome . "<br> ";
    }

    echo "<hr>";

    echo "Sentenças lógicas<br>";

    $categorias = DB::table('categorias')->whereBetween('id', [1, 3])->get(); //whereNotBetween

    foreach ($categorias as $cat) {
        echo "ID: " . $cat->id . " | ";
        echo "Nome: " . $cat->nome . "<br> ";
    }

    echo "<hr>";

    echo "Conjuntos<br>";

    $categorias = DB::table('categorias')->whereIn('id', [1, 2, 3])->get();

    foreach ($categorias as $cat) {
        echo "ID: " . $cat->id . " | ";
        echo "Nome: " . $cat->nome . "<br> ";
    }

    echo "<hr>";

    echo "Setenças lógicas<br>";

    $categorias = DB::table('categorias')->where([
            ['id', 1],
            ['nome', 'Roupas']
        ]
    )->get();

    foreach ($categorias as $cat) {
        echo "ID: " . $cat->id . " | ";
        echo "Nome: " . $cat->nome . "<br> ";
    }

    echo "<hr>";

    echo "Ordenação por nome<br>";
    $categorias = DB::table('categorias')->orderBy('nome')->get();

    foreach ($categorias as $cat) {
        echo "ID: " . $cat->id . " | ";
        echo "Nome: " . $cat->nome . "<br> ";
    }

    echo "<hr>";

});

Route::get('/novascategorias', function () {
    $id = DB::table('categorias')->insertGetId(
        ['nome' => 'Carros']
    );

    echo "Novo id: $id";
});

Route::get('/atualizandocategorias', function () {
    $cat = DB::table('categorias')->where('id', 1)->first();

    echo "<p>Antes da atualização</p>";
    echo "id: " . $cat->id . ";<br>";
    echo "nome: " . $cat->nome . ";<br>";

    DB::table('categorias')->where('id', 1)->update(['nome'=>'Roupas infantis']);
    $cat = DB::table('categorias')->where('id', 1)->first();
    echo "<p>Depois da atualização</p>";
    echo "id: " . $cat->id . ";<br>";
    echo "nome: " . $cat->nome . ";<br>";
});

Route::get('/removendocategorias', function () {
    echo "<p>Antes da remoção</p>";

    $categorias = DB::table('categorias')->get();

    foreach ($categorias as $cat) {
        echo "ID: " . $cat->id . " | ";
        echo "Nome: " . $cat->nome . "<br> ";
    }

    DB::table('categorias')->where('id', 1)->delete();

    $cat = DB::table('categorias')->where('id', 1)->first();

    echo "<p>Depois da remoção</p>";
    $categorias = DB::table('categorias')->get();

    foreach ($categorias as $cat) {
        echo "ID: " . $cat->id . " | ";
        echo "Nome: " . $cat->nome . "<br> ";
    }
});