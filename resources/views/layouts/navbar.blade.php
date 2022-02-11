@extends('layouts.master')

@section('navbar')
    <nav>
        <div>
            <div>
                <a>petshop</a>
            </div>
            <div>
                <a href="">Entre na sua conta</a>
                <a href="">Produtos</a>
                <a href="">Serviços</a>
                <a href="{{ route('registro.tela') }}">Criar conta</a>
            </div>

        </div>

    </nav>


@endsection
