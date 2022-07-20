@extends('base.index')

@section('container')
<form action='/pessoas/update' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type="hidden" value="{{ $pessoa->id }}" name="id"/>

    @include('components.field', ['type' => 'text', 'name' => 'nome', 'label' => 'Nome', 'value' => $pessoa->nome])
    @include('components.field', ['type' => 'text', 'name' => 'sobrenome', 'label' => 'Sobrenome', 'value' => $pessoa->sobrenome])
    @include('components.field', ['type' => 'date', 'name' => 'dtnasc', 'label' => 'Data de Nascimento', 'value' => $pessoa->dtnasc])
    <a class="btn btn-danger" href="/pessoas">Voltar</a>
    @include('components.button', ['type' => 'submit', 'color' => 'primary', 'label' => 'Alterar'])
</form>
@endsection
