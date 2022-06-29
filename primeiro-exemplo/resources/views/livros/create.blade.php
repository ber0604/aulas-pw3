<form action='/livros/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}' />
    <label for="titulo">Título</label>
    <input type='text' name='titulo' />
    <label for="autor">Autor</label>
    <input type='text' name='autor' />
    <button type='submit'>Enviar</button>
</form>
