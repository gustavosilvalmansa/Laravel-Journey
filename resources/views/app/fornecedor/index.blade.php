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
    
    Fornecedor: {{ $fornecedores[0]['nome']}}
    <br>
    Status: {{ $fornecedores[0]['status']}}
    <br>
    @if($fornecedores[0]['status'] == "N")
        Fornecedor Inativo
    @endif
    
    <br>

    @unless($fornecedores[0]['status'] == "S")
        Fornecedor Inativo
    @endunless
@endisset
