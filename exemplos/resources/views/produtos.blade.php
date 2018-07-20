<html>
<head>
    <link rel="stylesheet" href="{{URL::to('css/app.css')}}">
</head>
<body>

@if(isset($produtos))
    @if(count($produtos)==0)
        <h1>nenhum produto</h1>
    @else
        <h1>Temos produtos</h1>

    @endif
@else
    <h1>Variável produtos não foi passada como parâmetro</h1>
@endif

<script src="{{URL::to('js/app.js')}}" type="application/javascript"></script>
</body>
</html>