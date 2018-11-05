<html>
<head>
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        body {
            padding: 28px;
        }
    </style>
</head>
<body>
<main role="main">
    <div class="row">
        <div class="container col-md-8 offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <div class="card-title">
                        Cadastro de Cliente
                    </div>
                </div>
                <div class="card-body">
                    <form action="/clientes/novo" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome do C liente</label>
                            <input type="text" id="nome" class="form-control" name="nome" placeholder="Nome do cliente">
                        </div>
                        <div class="form-group">
                            <label for="nome">Idade do Cliente</label>
                            <input type="text" id="idade" class="form-control" name="idade"
                                   placeholder="Idade do cliente">
                        </div>
                        <div class="form-group">
                            <label for="nome">Endereço do Cliente</label>
                            <input type="text" id="endereco" class="form-control" name="endereco"
                                   placeholder="Endereço do cliente">
                        </div>
                        <div class="form-group">
                            <label for="nome">Email do Cliente</label>
                            <input type="email" id="email" class="form-control" name="email"
                                   placeholder="Email do cliente">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                        <button type="submit" class="btn btn-primary btn-sm">Cancelar</button>
                    </form>
                </div>

                @if($errors->any())
                    <div class="card-footer">
                        @foreach($errors->all() as $erro)
                            <div class="alert alert-danger" role="alert">
                                {{$erro}}
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
    </div>
</main>

<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>