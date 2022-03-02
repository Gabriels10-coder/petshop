@extends('layouts.master');

@section('titulo', 'Editar registro');
@section('styles')
<link rel="stylesheet" href="{{asset('css/editarpet.css')}}"/>
@endsection
@section('conteudo')
    <main style="margin-top: 30px">
        <section class="container"  >
            <form method="POST">
                @csrf
                @method("PUT")
                <div style="display: flex; justify-content:center;">
                <section id="test-container"  >

                    <div class="form-group nomeanimal">
                        <label class="form-label" for="nome">Nome do animal</label>
                        <input class="form-control"  type="text" name="nome" id="nome" />
                    </div>
                    <div class="form-group raça ">
                        <label class="form-label"  for="raca">Raça</label>
                        <input class="form-control" type="text" name="raça" id="raca" />
                    </div>
                    <div class="form-group peso">
                        <label class="form-label" for="peso">Peso</label>
                        <input class="form-control"type="text" name="peso" id="peso" />
                    </div>
                    <div class="form-group idade">
                        <label class="form-label" for="idade">Idade</label>
                        <input class="form-control" type="number" name="idade" id="idade" />
                    </div>
                    <div class="form-group espec">
                        <label class="form-label" for="especie">especie</label>
                        <input class="form-control" type="text" name="especie" id="especie" />
                    </div>
                </section>

</div>

            </form>

        </section>
    </main>

@endsection
