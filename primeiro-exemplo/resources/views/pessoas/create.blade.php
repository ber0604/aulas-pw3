<form action='/pessoas/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}' />
    <input type='text' name='nome' />
    <button type='submit'>Enviar</button>
</form>
