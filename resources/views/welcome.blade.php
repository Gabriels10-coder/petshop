@extends('layouts.master')
@section('conteudo')
    <section class="container">
            <div class=" d-flex justify-content-center container-imgcao" >
                <img src="{{ asset('img/cao.png') }}" alt="cão" class="img-fluid" id="imgcao" />
            </div>
            <div class="d-flex justify-content-center">
                <h3 id="texto">Mais vendidos</h3>
            </div>
    </section>
@endsection
