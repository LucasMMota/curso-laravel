<h1>Loop foreach - Arrays Associativos</h1>
@foreach($produtos as $p)
    <p>{{$p['id']}}:{{$p['nome']}}</p>

    @if($loop->last)
        (Último)
    @elseif($loop->first)
        (Primeiro)
    @endif
    {{var_dump($loop)}}
@endforeach