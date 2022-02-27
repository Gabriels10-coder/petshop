@extends('layouts.master')
@section('titulo', 'Tabela de pets')
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
                        <td scope="col">{{ $item['id'] }}</td>
                        <td scope="col">{{ $item['nome'] }}</td>
                        <td scope="col">{{$item['idade'] }}</td>
                        <td scope="col">{{ $item['raça'] }}</td>
                        <td scope="col">{{ $item['peso'] }}</td>
                        <td scope="col">{{ $item['dono'] }}</td>
                        <td class="md-8" scope="col"><button class="btn btn-outline-primary">Deletar</button></td>
                        <td scope="col"><button class="btn btn-outline-primary">Editar</button></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </section>

@endsection
@section('scripts')
    <script src="{{ asset('js/listapet.js') }}"></script>


@endsection
