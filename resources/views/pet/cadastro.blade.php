@extends('layouts.master')
@section('titulo', 'Cadastro de pets')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
@endsection
@section('conteudo')

    <form method="POST" action="{{ route('registro.pet') }}">
        @csrf
        <section class="container distnavbar ">
            <h1 style="text-align: center">Adicione um novo pet</h1>
            <div class="d-flex flex-column align-items-center ">
                <div class="col-6 ">
                    <label for="nome" class="form-label">Nome do animal</label>
                    <input class="form-control" type="text" name="nome" onkeyup="validanome()" id="nomeanimal" />
                    <p class="error" id="validanome"></p>
                </div>
                <div class="col-6 ">
                    <label for="especie" class="form-label">Espécie</label>
                    <input class="form-control" type="text" name="especie" onkeyup="validanome()" id="especie" />
                    <p class="error" id="validanome"></p>
                </div>
                <div class="col-6 ">
                    <label for="raca" class="form-label">Raça</label>
                    <input class="form-control" type="text" name="raca" id="raca" onkeyup="validaraca()" />
                    <p class="error" id="validaraca"></p>
                </div>
                <div class="col-6 ">
                    <label for="peso" class="form-label">Peso</label>
                    <input class="form-control" type="text" onkeyup="validapeso()" name="peso" id="peso" />
                    <p class="error" id="validapeso"></p>
                </div>
                <div class="col-6">
                    <label for="idade" class="form-label">Idade</label>
                    <input class="form-control" type="number" onkeyup="validaidade()" name="idade" id="idade" />
                    <p class="error" id="validaidade"></p>
                </div>
                {{-- <div class="col-6">
                    <label for="dono" class="form-label">Dono</label>
                    <input class="form-control" type="text" onkeyup="validadono()" name="dono" id="dono" />
                    <p class="error" id="validadono"></p>
                </div> --}}
                <div class="col-6 container-btn">
                    <button id="btn-submit" class="btn btn-outline-primary" type="submit">Enviar</button>
                </div>

            </div>
        </section>

    </form>
@endsection
@section('scripts')
    <script src="{{ asset('js/cadastropet.js') }}"></script>
    <script>

    </script>
@endsection
