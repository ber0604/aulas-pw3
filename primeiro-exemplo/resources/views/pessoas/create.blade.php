
<form action='/pessoas/store' method='post'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}' />
    <input type='text' name='nome' placeholder="entre com o nome"/>
    <input type='text' name='sobrenome'placeholder="entre com o sobrenome" />
    <button type='submit'>Enviar</button>
</form>
