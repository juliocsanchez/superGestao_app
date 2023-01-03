<h1>Provider</h1>

{{-- Comentario Descartado pelo Blade(motor de views) --}}

@php
   /*
   if() {

   }else{}
   */
@endphp

{{-- Unless executa caso seja false--}}

@isset($providers) {{--verificar se uma variável está ativa--}}

    @forelse($providers as $i => $provider)
        Interação Atual: {{ $loop->iteration }}
        <br>
        Fornecedor :  {{$provider['nome']}}
        <br>
        Status : {{$provider['status']}}
            @unless($provider['status'] == 'S')
                (Fornecedor Inativo)
            @endunless
        <br>
        CNPJ : {{$provider['CNPJ'] ?? 'CNPJ Inválido'}}
        <br>
        Telefone: ({{$provider['DDD']}}){{$provider['Telefone']}}
        @switch($provider['DDD'])
            @case('85')
                (Fortaleza-CE)
            @break

            @case('32')
                (Juiz de Fora-MG)
            @break

            @case('11')
                (São Paulo-SP)
            @break

            @default
                (Desconhecido)
        @endswitch
        <br>
        @if($loop->first)
            Primeira Interação do Loop
                @elseif($loop->last)
                    Útilma Interação do Loop                
        @endif
        <hr>
    @empty
    Não Existe Fornecedores
    @endforelse
@endisset




  
   
      
  