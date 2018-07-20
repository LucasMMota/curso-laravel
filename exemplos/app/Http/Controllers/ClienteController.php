<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Lista de todos os clientes";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Form para cadastrar novo cliente";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $s = "Armazenar: ";
        $s .= "Nome: " . $request->input('nome') . " e ";
        $s .= "Idade: " . $request->input('idade');

        return response($s, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $v = ["Mario", "Edson", "Roberto", "Jean"];
        if ($id >= 0 && $id < count($v))
            return $v[$id];
        return "Não encontrado";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "Formulário: $id";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $s = "Atualizar cliente com id: $id";
        $s .= "Nome: " . $request->input('nome') . " e ";
        $s .= "Idade: " . $request->input('idade');

        return response($s, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response("Apagado cliente com id $id", 200);
    }

    public function requisitar(Request $request)
    {
        echo "nome: " . $request->input('nome');
    }
}
