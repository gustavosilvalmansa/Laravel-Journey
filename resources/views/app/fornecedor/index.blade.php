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
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome']}}
    <br>
    Status: {{ $fornecedores[1]['status'] ?? 'Sem status'}}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Sem cnpj'}}
    <br>
    Telefone: {{$fornecedores[1]['ddd']  ?? ''}} {{ $fornecedores[1]['telefone'] ?? 'Sem telefone'}}
    <br>

    @switch($fornecedores[1]['ddd'])
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
@endisset
