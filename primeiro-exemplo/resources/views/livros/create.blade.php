<form action='/livros/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}'/>
    <input type='text'  name='titulo' placeholder="Título"/>
    <input type='text'  name='autor' placeholder="Autor"/>
    <input type="hidden"  name="id"/>
    <button type='submit'>Enviar</button>
</form>

