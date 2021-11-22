@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <painel titulo="Code Challenge">
                <botao url="pokemons" nome="Listagem de Pokemons"></botao>
                <botao url="api" nome="Api"></botao>
            </painel>
        </div>
    </div>
</div>
@endsection