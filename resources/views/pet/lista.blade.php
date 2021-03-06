@extends('layouts.master')
@section('titulo', 'Tabela de pets')
@section('styles')
<link rel="stylesheet" href="{{asset('css/lista.css')}}"/>
@endsection
@section('conteudo')
    <section id="section" style=" margin-top:60px;">
        <table class="table  table-striped table-hover ">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Raça</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Dono</th>
                </tr>
            </thead>
            <tbody id="tbody">
                @foreach ($animais as $item)
                    <tr scope="row">
                        <td scope="col">{{ $item->id }}</td>
                        <td scope="col">{{ $item->nome}}</td>
                        <td scope="col">{{ $item->idade}}</td>
                        <td scope="col">{{ $item->raça}}</td>
                        <td scope="col">{{ $item->peso }}</td>
                        <td scope="col">{{ $item->dono }}</td>
                        <td scope="col">
                            <form class="container-form-delete" id="form" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-outline-primary "
                                    onclick="document.getElementById('form').submit()">Deletar</a>
                            </form>

                        </td>
                        <td>
                            <a href="{{url("/pets/$item->id/editarpet")}}" class="btn btn-outline-primary">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </section>
   <p id="retorno"></p>
   @if (session('msg'))
   <p style="color:aqua">{{ session('msg') }}</p>
@endif


@endsection
