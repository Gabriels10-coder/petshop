@extends('layouts.master')

@section('conteudo')
    <form method="POST" action="{{ route('registro.pet') }}">
        @csrf
        <section class="container distnavbar ">
            <div class="d-flex flex-column align-items-center ">
                <div class="col-6 ">
                    <label class="form-label">Nome do animal:</label>
                    <input class="form-control" type="text" name="nome" onkeyup="validacaoPets()"
                        placeholder="Insira o nome  do seu animal" id="nomeanimal" re />
                    <p id="validanome"></p>

                </div>
                <div class="col-6">
                    <label class="form-label">raça:</label>
                    <input class="form-control" type="text" name="raca" placeholder="Insira a raça do seu animal" id="raca"
                        onkeyup="validacaoPets()" />
                    <p id="validaraca"></p>
                </div>
                <div class="col-6">
                    <label class="form-label">Peso:</label>
                    <input class="form-control" type="text" onkeyup="validacaoPets()" name="peso"
                        placeholder="Insira o peso atual do animal" id="peso" />
                    <p id="validapeso"></p>
                </div>
                <div class="col-6">
                    <label class="form-label">Idade:</label>
                    <input class="form-control" type="number"value="0" onkeyup="validacaoPets()" name="idade"
                        placeholder="Insira a idade do seu animal" id="idade" />
                    <p id="validaidade"></p>
                </div>
                <div class="col-6">
                    <label class="form-label">Dono:</label>
                    <input class="form-control" type="text" onkeyup="validacaoPets()" name="dono"
                        placeholder="Quem é o dono" id="dono" />
                    <p id="validadono"></p>
                </div>
                <div class="col-6 container-btn">
                    <button id="btn-submit" class="btn btn-outline-primary" id="sucesso" type="submit">Enviar</button>
                </div>

            </div>
        </section>

    </form>
@endsection
