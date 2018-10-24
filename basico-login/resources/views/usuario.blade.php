@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuário</div>

                <div class="card-body">
                    @auth
                        <h1>Usuário Autenticado</h1>
                        <hr>
                        <h4>Nome: {{ Auth::user()->name }}</h4>
                        <h4>email: {{ Auth::user()->email }}</h4>

                    @endauth

                    @guest
                        <h1>Usuário NÃO Autenticado</h1>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
