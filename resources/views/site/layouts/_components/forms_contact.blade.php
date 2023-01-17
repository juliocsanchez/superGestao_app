{{ $slot }}
<form action={{ route('site.contact')}} method="post">
    @csrf
    <input name="nome" value="{{ old('nome')}}" type="text" placeholder="Nome" class="{{$color}}">

        <p text="red">{{$errors->has('nome') ? $errors->first('nome') : ''}}</p>

    <br>


    <input name="telefone" value="{{ old('telefone')}}" type="text" placeholder="Telefone" class="{{$color}}">

        <p text="red">{{$errors->has('telefone') ? $errors->first('telefone') : ''}}</p>

    <br>


    <input name="email" value="{{ old('email')}}" type="text" placeholder="E-mail" class="{{$color}}">

        <p text="red">{{$errors->has('email') ? $errors->first('email') : ''}}</p>

    <br>


    <select name="motivo_contatos_id" class="{{$color}}">

        <option value=""> Qual o motivo do contato?</option>
        @foreach ( $motivo_contatos as $key => $motivo_contato )
            <option value ="{{$motivo_contato->id}}"{{old('motivo_contatos_id') == $motivo_contato->id ?  'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>
        @endforeach      

    </select>
    <p text="red">{{$errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : ''}}</p>

    <br>

    <textarea name="mensagem" class="{{$color}}">{{(old('mensagem')!= '') ? old('mensagem'):'Preencha aqui a sua mensagem'}}</textarea>

        <p text="red">{{$errors->has('mensagem') ? $errors->first('mensagem') : ''}}</p>

    <br>

    <button type="submit" class="{{$color}}">ENVIAR</button>
</form>
