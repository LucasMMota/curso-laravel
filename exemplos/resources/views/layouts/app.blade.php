<html>
<head>
    <title>Meu titulo - @yield('titulo')</title>
</head>
<body>
@section('barralateral')
    Esta parte da seção é do template PAI
@show
<div>
    @yield('conteudo')
</div>
</body>
</html>