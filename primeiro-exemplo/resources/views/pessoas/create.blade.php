@extends('base.index')

@section('container')
    <form action='/pessoas/store' method='post'>

        <input type='hidden' name='_token' value='{{ csrf_token() }}' />
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type='text' name='nome' class="form-control" placeholder="entre com o nome" />
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Sobrenome</label>
            <input type='text' name='sobrenome' class="form-control" placeholder="entre com o sobrenome" />
        </div>
        <a class="btn btn-danger" href="/pessoas">Voltar</a>
        <button type='submit'class="btn btn-primary">Enviar</button>
    </form>
@endsection
