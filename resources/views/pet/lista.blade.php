@extends('layouts.master')
@section('titulo', 'Tabela de pets')
@section('conteudo')
    <section id="section" style="margin-top: 200px">
<h1 id='texto'></h1>
    </section>

    @endsection
    @section('scripts')
    <script src="{{ asset('js/listapet.js') }}"></script>
    @endsection





