<h3> Fornecedor </h3>
@php




@endphp

 {{-- @dd($fornecedores) Ler array var --}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Menos que 10 fornecedores</h3>

    @elseif(count($fornecedores)> 10)
        <h3>Mais que 10 fornecedores</h3>

    @else
        <h3>Sem fornecedores</h3>
@endif