@extends('base.index')

@section('container')
    <form action='/pessoas/update' method='post'>

        <input type='hidden' name='_token' value='{{ csrf_token() }}' />
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type='text' name='nome' value="{{ $pessoa->nome }}" class="form-control" placeholder="entre com o nome" />
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Sobrenome</label>
            <input type='text' name='sobrenome' value=" {{ $pessoa->sobrenome }}" class="form-control" placeholder="entre com o sobrenome" />
        </div>
        <div class="mb-3">
            <label for="dtnasc" class="form-label">Idade</label>
            <input type='date' name='dtnasc' value=" {{ $pessoa->idade }}" class="form-control" placeholder="entre com a data de nascimento" />
        </div>
        <div class="mb-3">
            <input type="hidden" value="{{ $pessoa->id }}" name="id" />
        </div>
        <a class="btn btn-danger" href="/pessoas">Voltar</a>
        <button type='submit'class="btn btn-primary">Alterar</button>
    </form>
@endsection
