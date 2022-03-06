@extends('layouts.master');

@section('titulo', 'Editar registro');
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/editarpet.css') }}" />
@endsection
@section('conteudo')
    <main>
        <section class="container">
            <section>
                <div class="container--titulo">
                    <h1>Edite seu registro </h1>
                </div>
                <form class="container--edit" method="POST" action="{{ url("pets/updatepet/$infos->id") }}">
                    @csrf
                    @method('PUT')
                    <div class="container--nome">
                        <label class="form-label" for="nome">Nome do animal</label>
                        <input class="form-control" type="text" name="nome" id="nome" value={{ $infos->nome ?? '' }} />
                    </div>
                    <div class="container--raca">
                        <label class="form-label" for="raca">Raça</label>
                        <input class="form-control" type="text" name="raça" id="raca" value={{ $infos->raça ?? '' }} />
                    </div>
                    <div class="container--peso">
                        <label class="form-label" for="peso">Peso</label>
                        <input class="form-control" type="text" name="peso" id="peso" value={{ $infos->peso ?? '' }} />
                    </div>
                    <div class="container--idade">
                        <label class="form-label" for="idade">Idade</label>
                        <input class="form-control" type="number" name="idade" id="idade"
                            value={{ $infos->idade ?? '' }} />
                    </div>
                    <div class="container--espec">
                        <label class="form-label" for="especie">Espécie</label>
                        <input class="form-control" type="text" name="especie" id="especie"
                            value={{ $infos->especie ?? '' }} />
                    </div>
                    <div class="container--buttons">
                        <button id="editar" type="submit" class="btn btn-outline-primary btn-person">Editar</button>
                        <button class="btn btn-outline-primary btn-person">Cancelar</button>
                        @if (session('msg'))
                        <p style="color:red;text-align:center;">{{ session('msg') }}</p>
                    @endif
                    </div>


                </form>

            </section>
            <p id="id" style="display: none">{{ $infos->id }}</p>
            <p style="color:aqua" id="retorno"></p>




        </section>

    </main>


@endsection
@section('scripts')
    <script src="{{ asset('js/editarpet.js') }}"></script>

@endsection
