@extends('layouts.master');

@section('titulo', 'Editar registro');
@section('styles')
<link rel="stylesheet" href="{{asset('css/editarpet.css')}}"/>
@endsection
@section('conteudo')
    <main>
        <section class="container"    >
            <form method="POST">
                @csrf
                @method("PUT")
                <section class="container--edit">
                    <div class="container--titulo">
                        <h1>Edite seu registro</h1>
                    </div>
                    <div class="container--nome">
                        <label class="form-label" for="nome">Nome do animal</label>
                        <input class="form-control"  type="text" name="nome" id="nome" />
                    </div>
                    <div class="container--raca">
                        <label class="form-label"  for="raca">Raça</label>
                        <input class="form-control" type="text" name="raça" id="raca" />
                    </div>
                    <div class="container--peso">
                        <label class="form-label" for="peso">Peso</label>
                        <input class="form-control"type="text" name="peso" id="peso" />
                    </div>
                    <div class="container--idade">
                        <label class="form-label" for="idade">Idade</label>
                        <input class="form-control" type="number" name="idade" id="idade" />
                    </div>
                    <div class="container--espec">
                        <label class="form-label" for="especie">Espécie</label>
                        <input class="form-control" type="text" name="especie" id="especie" />
                    </div>
                    <div  class="container--buttons">
                        <button class="btn btn-outline-primary btn-person">Editar</button>
                        <button class="btn btn-outline-primary btn-person">Cancelar</button>
                    </div>
                </section>



            </form>

        </section>
    </main>

@endsection
