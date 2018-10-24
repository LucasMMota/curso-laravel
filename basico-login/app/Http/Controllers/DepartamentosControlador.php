<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

////////////////////////////////////////
use Illuminate\Support\Facades\Auth;


class DepartamentosControlador extends Controller
{

    public function index() {

        echo "<h4>Lista de Produtos</h4>";
        echo "<ul>";
        echo "<li>Macarrão</li>";
        echo "<li>Feijão</li>";
        echo "<li>Carne bovina</li>";
        echo "<li>Arroz</li>";
        echo "<li>Leite</li>";
        echo "</ul>";
        echo "<hr>";

        if (Auth::check()) {
            $user = Auth::user();
            echo "<h4>Você está logado!</h4>";
            echo "<p>Nome: " . $user->name . "</p>";
            echo "<p>email: " . $user->email . "</p>";
            echo "<p>ID:" . $user->id . "</p>";
        }
        else {
            echo "<h4>Você  NÃO está logado!</h4>";
        }

    }
}


