<form action='/livros/update' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type='text' value="{{ $livros->titulo }}" name='titulo' placeholder="Título"/>
    <input type='text' value="{{ $livros->autor }}" name='autor' placeholder="Autor"/>
    <input type="hidden" value="{{ $livros->id }}" name="id"/>
    <button type='submit'>Alterar</button>
</form>
