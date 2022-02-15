@extends('layouts.master')

@section('navbar')
    <nav class="navbar navbar-expand-md navbar-primary bg-primary fixed-top">
        <div class="container">
            <div class="col">
                <a class="navbar-brand fontlinks" href="{{ route('home') }}">Petshop</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
                aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toogler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                <div class="navbar-nav">
                    <a class="nav-item nav-link fontlinks" id="criarconta">Criar conta</a>
                    <a class="nav-item nav-link fontlinks" id="entrarnaconta">Entre na sua conta</a>
                    <!--------Dropdown produtos !-------->
                    <div class="dropdown ">
                        <a class="nav-item nav-link navbar-toggle fontlinks" href="#" role="button" id="produtos"
                            data-bs-toggle="dropdown" aria-expanded="false">Produtos</a>
                        <ul class="dropdown-menu" aria-labelledby="produtos">
                            <li><a class="dropdown-item hover-itens-dropdown" href="#">Petiscos</a></li>
                            <li><a class="dropdown-item hover-itens-dropdown" href="#">Brinquedos</a></li>
                            <li><a class="dropdown-item hover-itens-dropdown" href="#">Remédios</a></li>
                        </ul>

                    </div>
                    <!--------Dropdown Serviços !-------->
                </div>
                <div class="dropdown ">
                    <a class="nav-item nav-link navbar-toggle fontlinks" href="#" role="button" id="servicos"
                        data-bs-toggle="dropdown" aria-expanded="false">Serviços</a>
                    <ul class="dropdown-menu" aria-labelledby="servicos">
                        <li><a class="dropdown-item hover-itens-dropdown" href="#">Tosa</a></li>
                        <li><a class="dropdown-item hover-itens-dropdown" href="#">Banho</a></li>
                        <li><a class="dropdown-item hover-itens-dropdown" href="#">Veterinario</a></li>
                    </ul>
                </div>

            </div>


        </div>

        </div>
        </div>
    </nav>


@endsection
