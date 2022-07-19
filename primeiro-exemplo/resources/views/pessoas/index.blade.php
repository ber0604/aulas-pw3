@extends('base.index')
@section('container')


<table class="table table-dark">
    <thead>
        <tr>
            <th><a class="btn btn-success" href ="/pessoas/create">Nova pessoa</a></th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Idade</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pessoas as $pessoa)
            <tr>
                <td></td>
                <td>{{ $pessoa->nome }}</td>
                <td>{{ $pessoa->sobrenome }}</td>
                <td>{{ $pessoa->idade }}</td>
                <td>
                    <a class="btn btn-warning" href="/pessoas/{{ $pessoa->id }}/edit">Editar</a>
                    <a class="btn btn-info" href="/pessoas/{{ $pessoa->id }}/show">Ver</a>
                    <a class="btn btn-danger" href="/pessoas/{{ $pessoa->id }}/destroy">Remover</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
