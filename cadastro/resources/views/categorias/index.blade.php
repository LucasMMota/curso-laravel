@extends('layouts.app', ["current"=>"categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>
            <table class="table table-hover table-ordered">
                <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @if(empty($categorias))
                    <h3>Sem categorias</h3>
                @else
                    @foreach($categorias as $cat)
                        <tr>
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->name}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="/categorias/editar/{{$cat->id}}">Editar</a>
                                <a class="btn btn-sm btn-danger" href="/categorias/remover/{{$cat->id}}">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="/categorias/novo" class="btn btn-sm btn-primary" role="button">Nova</a>
        </div>
    </div>
@endsection