<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
    @yield('styles')
    <title>@yield('titulo')</title>
</head>
<style>
    * {
        font-family: 'Roboto', sans-serif;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

</style>

<body>
    <header>
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
                        <a class="nav-item nav-link fontlinks" href="{{ route('registro.tela') }}"
                            id="criarconta">Criar conta</a>
                        <a class="nav-item nav-link fontlinks" href="{{ route('home') }}" id="entrarnaconta">Entre na sua
                            conta</a>
                        <!--------Dropdown produtos !-------->
                        <div class="dropdown ">
                            <a class="nav-item nav-link navbar-toggle fontlinks" role="button" id="produtos"
                                data-bs-toggle="dropdown" aria-expanded="false">Produtos</a>
                            <ul class="dropdown-menu" aria-labelledby="produtos">
                                <li><a class="dropdown-item hover-itens-dropdown"
                                        href="{{ route('lista.tela') }}">Petiscos</a></li>
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
    </header>
    <main>
        @yield('conteudo')
    </main>
    <footer>
        @yield('rodapé')
    </footer>

</body>
<!---------! END Import Scripts !---------->
<script src="{{ asset('jquery/jquery.js') }}"></script>
<script src="{{ asset('bootstrap/bootstrap.js') }}"></script>
@yield('scripts')
<!---------! END Import Scripts !---------->

</html>
