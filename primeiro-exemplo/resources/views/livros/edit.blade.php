@extends('base.index')

@section('container')
<form action='/livros/update' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type="hidden" value="{{ $livro->id }}" name="id"/>

    @include('components.field', ['type' => 'text', 'name' => 'titulo', 'label' => 'Titulo', 'value' => $livro->titulo])
    @include('components.field', ['type' => 'text', 'name' => 'autor', 'label' => 'Autor', 'value' => $livro->autor])
    <a class="btn btn-danger" href="/livros">Voltar</a>
    @include('components.button', ['type' => 'submit', 'color' => 'primary', 'label' => 'Alterar'])
</form>
@endsection
