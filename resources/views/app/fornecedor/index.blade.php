<h3> Fornecedor </h3>
@php




@endphp

 {{--  
    
     @dd($fornecedores) Ler array var 

    Comando IF SINTAXE BLADE

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Menos que 10 fornecedores</h3>

    @elseif(count($fornecedores)> 10)
        <h3>Mais que 10 fornecedores</h3>

    @else
        <h3>Sem fornecedores</h3>
@endif
--}}
@forelse ($fornecedores as $index => $fornecedor)
    Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome']}}
        <br>
        Status: {{ $fornecedor['status'] ?? 'Sem status'}}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Sem cnpj'}}
        <br>
        Telefone: {{$fornecedor['ddd']  ?? ''}} {{ $fornecedor['telefone'] ?? 'Sem telefone'}}
        <br>
      @switch($fornecedor['ddd'])
        @case('51')
            Porto Alegre - RS
            @break
        @case('11')
          São Paulo - SP  
            @break
        @case('21')
          Rio de janeiro - RJ
            @break
        @default
            
    @endswitch 
   
    <hr>
    @empty
    Sem fornecedores
@endforelse

