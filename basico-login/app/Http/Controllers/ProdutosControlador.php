<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosControlador extends Controller
{
    public function __construct() {
        //$this->middleware('auth'); // 2)
    }

    public function index() {
        echo "<h4>Lista de Produtos</h4>";
        echo "<ul>";
        echo "<li>Macarrão</li>";
        echo "<li>Feijão</li>";
        echo "<li>Carne bovina</li>";
        echo "<li>Arroz</li>";
        echo "<li>Leite</li>";
        echo "</ul>";
    }
}
