<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--------- Google Fonts !------------>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!--------- End Google fonts !------------>
    <!---------------! Bootstrap css !----------------->
    <link rel="stylesheet" href="{{ asset('bootstrap/style.css') }}" />
    <!--------------! End Bootstrap css !------------->
    <!--------------! CSS general !----------------->
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}"/>
    <!--------------! End CSS general !------------->
    <!-------------!  Title for page  !-------------->
    <title>@yield('titulo')</title>
    <!------------! End Title for page !-------------->
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
<script src="{{ asset('jquery/jquery.js') }}"></script>
<script src="{{ asset('bootstrap/bootstrap.js') }}"></script>
<!---------! END Import Scripts !---------->

</html>
