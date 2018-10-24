<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', 'ProdutoController@index');

Route::get('/negado', function () {
    // return "Acesso negado. Somente usuarios logados podem acessar os produtos."; // 1))
    return "Acesso negado. Somente administrador tem acesso aos produtos"; // 2))
})->name('negado');

Route::post('/login', function (Request $request) {
    $admin = false;
    $passwdOK = false;
    switch( $request->user ) {
        case 'joao':
            $passwdOK = $request->passwd === "senhajoao";
            $admin = true;
            break;
        case 'marcos':
            $passwdOK = $request->passwd === "senhamarcos";
            $admin = false;
            break;
        case 'default':
            $passwdOK = false;
    }
    if ($passwdOK) {
        $login = [ 'user' => $request->user, 'isadmin' => $admin ];
        $request->session()->put('login', $login);
        return response("Tudo OK!", 200);
    }
    else {
        $request->session()->flush();
        return response("Erro no login", 404);
    }
});

Route::get('/logout', function (Request $request) {
    $request->session()->flush();
    return response("Deslogado com sucesso.", 200);
});


