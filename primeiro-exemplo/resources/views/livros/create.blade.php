@extends('base.index')

@section('container')
<form action='/livros/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>

    @include('components.field', ['type'=> 'text', 'name' => 'titulo', 'label' => 'Titulo', 'value' => ""])
    @include('components.field', ['type'=> 'text', 'name' => 'autor', 'label' => 'Autor', 'value' => ""])
    <a class="btn btn-danger" href="/livros">Voltar</a>
    @include('components.button', ['color'=> 'primary', 'label' => 'Inserir', 'type' => 'submit'])
  </form>
@endsection
