@if (count($pessoas) == 0)
nenhuma Pessoa
@elseif(count($pessoas) == 1)
Apenas uma Pessoa
@else
Total de Pessoas: {{count($pessoas)}}
<ul>
    @foreach($pessoas as $pessoa)
    <li>{{$pessoa['nome']}} {{$pessoa['sobrenome']}} </li>
    @endforeach
</ul>
@endif