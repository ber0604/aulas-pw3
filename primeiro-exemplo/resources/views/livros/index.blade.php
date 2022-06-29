@if (count($livros) == 0)
nenhuma livro
@elseif(count($livros) == 1)
apenas um livro
@else
total de livros = {{count($livros)}}
<ul>
    @foreach($livros as $livro)
<li>{{$livro['titulo']}} :  {{$livro['autor']}}</li>
    @endforeach
</ul>
@endif