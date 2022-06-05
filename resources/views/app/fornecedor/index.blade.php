<h3>Fornecedor</h3>

@php

@endphp

@isset($fornecedores)

    @forelse ($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        TELEFONE: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if ($loop->first)
            Primeira iteração do Loop
        @endif
        @if ($loop->last)
        Última iteração do Loop
        <br>
        Total de registros: {{ $loop->count }}
    @endif
        <hr>
        @empty
        Não existe fornecedores cadastrados
    @endforelse
@endisset
