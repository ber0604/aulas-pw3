<a href="/pessoas/create">Nova pessoa</a>
@if (count($pessoas) == 0)
    Nenhuma pessoa
@elseif (count($pessoas) == 1)
    Apenas uma pessoa
@else
    Total de Pessoas: {{ count($pessoas)}}
    <ul>
    @foreach($pessoas as $pessoa)
        <li>
            {{$pessoa->nome}}&nbsp;{{$pessoa->sobrenome}}
            <a href="/pessoas/{{$pessoa->id}}/edit">Editar</a>
            <a href="/pessoas/{{$pessoa->id}}/show">Ver</a>
            <a href="/pessoas/{{$pessoa->id}}/destroy">Remover</a>
        </li>
    @endforeach
    </ul>
@endif
