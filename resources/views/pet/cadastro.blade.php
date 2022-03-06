@extends('layouts.master')
@section('titulo', 'Cadastro de pets')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
@endsection
@section('conteudo')
    <div class="container">
        <form class="container--grid" method="POST" action="{{ route('registro.pet') }}">
            @csrf
            <div class="container--titulo">
                <h1>Adicione um novo pet</h1>
            </div>
            <div class="container--nome">
                <label for="nome" class="form-label">Nome do animal</label>
                <input class="form-control" type="text" name="nome" onkeyup="validanome()" id="nomeanimal" />
                <p class="error" id="validanome"></p>
            </div>
            <div class="container--raca ">
                <label for="raca" class="form-label">Raça</label>
                <input class="form-control" type="text" name="raca" id="raca" onkeyup="validaraca()" />
                <p class="error" id="validaraca"></p>
            </div>
            <div class="container--peso ">
                <label for="peso" class="form-label">Peso</label>
                <input class="form-control" type="text" onkeyup="validapeso()" name="peso" id="peso" />
                <p class="error" id="validapeso"></p>
            </div>
            <div class="container--idade">
                <label for="idade" class="form-label">Idade</label>
                <input class="form-control" type="number" onkeyup="validaidade()" name="idade" id="idade" />
                <p class="error" id="validaidade"></p>
            </div>
            <div class="container--especie">
                <label for="especie" class="form-label">Espécie</label>
                <input class="form-control" type="text" name="especie" onkeyup="validanome()" id="especie" />
                <p class="error" id="validanome"></p>
            </div>
            <div class="container--btn">
                <button id="btn-submit" class="btn btn-outline-primary" type="submit">Enviar</button>
            </div>

    </div>
    </form>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/cadastropet.js') }}"></script>
@endsection
