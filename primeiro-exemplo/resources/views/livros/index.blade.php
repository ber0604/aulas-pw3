@extends('base.index')

@section('container')
<a class="btn btn-success mb-2" href="/livros/create">Novo livro</a>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($livros as $livro)
            <tr>
                <td>{{$livro->titulo}}</td>
                <td>{{$livro->autor}}</td>
                <td>
                    <a class="btn btn-warning" href="/livros/{{$livro->id}}/edit">Editar</a>
                    <a class="btn btn-info" href="/livros/{{$livro->id}}/show">Ver</a>
                    <a class="btn btn-danger" href="/livros/{{$livro->id}}/destroy">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection