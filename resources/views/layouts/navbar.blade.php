@extends('layouts.master')

@section('navbar')
    <nav class="navbar navbar-expand-md navbar-primary bg-primary">
        <div class="container">
            <div class="col">
                <a class="navbar-brand" href="{{ route('home') }}">Petshop</a>
            </div>
            <div class="col">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link " href="">Entre na sua conta</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" href="">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('registro.tela') }}">Criar conta</a></li>
                </ul>
            </div>
        </div>
    </nav>


@endsection
