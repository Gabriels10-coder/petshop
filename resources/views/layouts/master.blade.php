<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!---------------! Bootstrap css !----------------->
    <link rel="stylesheet" href="{{ asset('bootstrap/style.css') }}" />
    <!--------------! End Bootstrap css !------------->
    <!--------------! CSS general !----------------->
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <!--------------! End CSS general !------------->
    <!-------------!  Title for page  !-------------->
    <title>@yield('titulo')</title>
    <!------------! End Title for page !-------------->
</head>

<body>
    <header>
        @yield('navbar')
    </header>
    <main>
        @yield('conteudo')
    </main>
    <footer>
        @yield('rodapé')
    </footer>

</body>
<!---------! END Import Scripts !---------->
<script src="{{asset('jquery/jquery.js')}}" ></script>
<script src="{{asset('bootstrap/bootstrap.js')}}"></script>
<!---------! END Import Scripts !---------->

</html>
