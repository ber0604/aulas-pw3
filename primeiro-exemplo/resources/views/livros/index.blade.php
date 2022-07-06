<a href="/livros/create">Novo Livro</a>
@if (count($livros) == 0)
    nenhum livro
@elseif(count($livros) == 1)
    apenas um livro
@else
    total de livros = {{ count($livros) }}
    <ul>

    @foreach($livros as $livro)
    <li>
        {{$livro->titulo}}&nbsp;{{$livro->autor}}
        <a href="/livros/{{$livro->id}}/edit">Editar</a>
        <a href="/livros/{{$livro->id}}/show">Ver</a>
        <a href="/livros/{{$livro->id}}/destroy">Remover</a>
    </li>
@endforeach
</ul>
@endif
