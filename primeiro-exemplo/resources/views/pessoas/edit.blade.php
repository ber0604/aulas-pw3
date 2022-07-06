<form action='/pessoas/update' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type='text' value="{{ $pessoa->nome }}" name='nome' placeholder="Entre com o nome"/>
    <input type='text' value="{{ $pessoa->sobrenome }}" name='sobrenome' placeholder="Entre com o sobrenome"/>
    <input type="hidden" value="{{ $pessoa->id }}" name="id"/>
    <button type='submit'>Alterar</button>
</form>
