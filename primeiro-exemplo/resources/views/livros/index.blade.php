<a href="/livros/create">Novo Livro</a>
@if (count($livros) == 0)
    nenhum livro
@elseif(count($livros) == 1)
    apenas um livro
@else
    total de livros = {{ count($livros) }}
    <ul>
        @foreach ($livros as $livro)
            {{ $livro->titulo }}&nbsp;{{ $livro->sobrenome }}
            <button>ALTERAR</button>
            <button>VER</button>
            <button>Remover</button>
        @endforeach
    </ul>
@endif
