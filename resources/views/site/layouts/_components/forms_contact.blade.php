{{ $slot }}
<form action={{ route('site.contact')}} method="POST">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{$color}}">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{$color}}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{$color}}">
    <br>
    <select name="motivo" class="{{$color}}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{$color}}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{$color}}">ENVIAR</button>
</form>