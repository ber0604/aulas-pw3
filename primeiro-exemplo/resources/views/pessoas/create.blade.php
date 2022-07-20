@extends('base.index')

@section('container')
<form action='/pessoas/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>

    @include('components.field', ['type'=> 'text', 'name' => 'nome', 'label' => 'Nome', 'value' => ""])
    @include('components.field', ['type'=> 'text', 'name' => 'sobrenome', 'label' => 'Sobrenome', 'value' => ""])
    @include('components.field', ['type' => 'date', 'name' => 'dtnasc', 'label' => 'Data de Nascimento', 'value' => ""])
    <a class="btn btn-danger" href="/pessoas">Voltar</a>
    @include('components.button', ['color'=> 'primary', 'label' => 'Inserir', 'type' => 'submit'])
  </form>
@endsection
