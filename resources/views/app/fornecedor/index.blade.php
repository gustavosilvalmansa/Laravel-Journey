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
 
@for ($i = 0;  isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome']}}
        <br>
        Status: {{ $fornecedores[$i]['status'] ?? 'Sem status'}}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Sem cnpj'}}
        <br>
        Telefone: {{$fornecedores[$i]['ddd']  ?? ''}} {{ $fornecedores[$i]['telefone'] ?? 'Sem telefone'}}
        <br>
      @switch($fornecedores[$i]['ddd'])
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
    <br>
    {{ $i }}
    <hr>
@endfor

