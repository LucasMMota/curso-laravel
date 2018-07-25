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

use App\Categoria;

Route::prefix('categorias')->group(function () {
    Route::get('/', function () {
        $categorias = Categoria::all();
        foreach ($categorias as $c) {
            echo "id: " . $c->id . ", ";
            echo "nome: " . $c->nome . "<br>";
        }
    })->name('categorias.all');

    Route::get('/inserir/{nome}', function ($nome) {
        $cat = new Categoria();
        $cat->nome = $nome;
        $cat->save();
        return redirect()->route('categorias.all');
    });

    Route::get('/ver/{id}', function ($id) {
        $cat = Categoria::withTrashed()->find($id);
        if ($cat) {
            echo "id: " . $cat->id;
            echo ", nome: " . $cat->nome . "<br>";
            die;
        }
        echo "nenhuma categoria";
    });

    Route::get('/atualizar/{id}/{nome}', function ($id, $nome) {
        $cat = Categoria::find($id);
        if ($cat) {
            $cat->nome = $nome;
            $cat->save();
            return redirect()->route('categorias.all');
        }
        echo "<h1>Categoria não encontrada</h1>";
    });

    Route::get('/remover/{id}', function ($id) {
        $cat = Categoria::find($id);
        if ($cat) {
            $cat->delete();
            return redirect()->route('categorias.all');
        }
        echo "<h1>Categoria não encontrada</h1>";
    });

    Route::get('/q={query}', function ($query) {
        $categorias = Categoria::where('nome', 'like', "%$query%")->get();
        foreach ($categorias as $c) {
            echo "id: " . $c->id . ", ";
            echo "nome: " . $c->nome . "<br>";
        }
    });

    Route::get('/nome/{nome}', function ($nome) {
        $categorias = Categoria::where('nome', $nome)->get();
//        if ($categorias) {
        foreach ($categorias as $c) {
            echo "id: " . $c->id . ", ";
            echo "nome: " . $c->nome . "<br>";
        }
//        } else
//            echo "<h1>Categoria não encontrada</h1>";
    });

    Route::get('/idmaiorque/{id}', function ($id) {
        $categorias = Categoria::where('id', '>', $id)->get();
        foreach ($categorias as $c) {
            echo "id: " . $c->id . ", ";
            echo "nome: " . $c->nome . "<br>";
        }

        $count = Categoria::where('id', '>', $id)->count();
        echo "<h3>$count</h3>";
        $max = Categoria::where('id', '>', $id)->max('id');
        echo "<h3>$max</h3>";
    });

    Route::get('/ids123', function () {
        $categorias = Categoria::find([1, 2, 3]);
        foreach ($categorias as $c) {
            echo "id: " . $c->id . ", ";
            echo "nome: " . $c->nome . "<br>";
        }
    });

    Route::get('/trash', function () {
        $categorias = Categoria::onlyTrashed()->get();
        foreach ($categorias as $c) {
            echo "id: " . $c->id . ", ";
            echo "nome: " . $c->nome;
            if ($c->trashed())
                echo " (apagado)";
            echo "<br>";
        }
    });

    Route::get('/restaurar/{id}', function ($id) {
        $categorias = Categoria::withTrashed()->find($id);

        if ($categorias) {
            $categorias->restore();
        }
        echo "Categoria restaurada: " . $categorias->id . "<br> ";
        echo "<a href='/categorias'>Listar Todas</a>";

    });

    Route::get('/removerPermanentemente/{id}', function ($id) {
        $categorias = Categoria::withTrashed()->find($id);

        if ($categorias) {
            $categorias->forceDelete();
        }

        return redirect()->route('categorias.all');

    });

});


