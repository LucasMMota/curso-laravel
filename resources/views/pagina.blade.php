<html>
<head>
    {{--<link rel="stylesheet" href="{{asset('css/app.css')}}">--}}
    <link rel="stylesheet" href="{{URL::to('css/app.css')}}">
</head>
<body>
@alerta(['tipo'=>'primary', 'titulo'=>'Erro fatal'])
    <strong>Erro: </strong> Sua mensagem de erro.
@endalerta

{{--<script src="{{asset('js/app.js')}}" type="application/javascript"></script>--}}
<script src="{{URL::to('js/app.js')}}" type="application/javascript"></script>

</body>
</html>