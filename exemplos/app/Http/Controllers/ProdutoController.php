<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //
    public function listar()
    {
        $produtos = [
            "Notebook",
            "Mouse",
            "Teclado",
            "Monitor",
            "Impressora"
        ];
        return view('produtos', compact('produtos'));
    }

    public function loop($n)
    {
//        var_dump(compact($n));
        return view('loopfor', compact('n'));
    }

    public function loopforeach()
    {
        $produtos = [
            ['id' => 1, 'nome' => 'computador',],
            ['id' => 2, 'nome' => 'computador2',],
            ['id' => 3, 'nome' => 'computador3',],
            ['id' => 4, 'nome' => 'computador4',],
        ];

        return view('foreach', compact('produtos'));
    }
}
