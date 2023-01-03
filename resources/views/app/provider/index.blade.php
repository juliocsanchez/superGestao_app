<h1>Provider</h1>

{{-- Comentario Descartado pelo Blade(motor de views) --}}

@php
   /*
   if() {

   }else{}
   */
@endphp

{{-- Unless executa caso seja false--}}

@isset($providers){{--verificar se uma variável está ativa--}}

    Fornecedor : {{ $providers[1]['nome']}}
    <br>
    Status : {{$providers[1]['status']}}
    <br>
    CNPJ : {{$providers[1]['CNPJ'] ?? 'CNPJ inválido'}} {{--$variavel testada estiver indefinida(isset) ou vazia(empty) aplicamos um valor default--}}
    
            
    


  

    

@endisset 

    

  
   
      
  