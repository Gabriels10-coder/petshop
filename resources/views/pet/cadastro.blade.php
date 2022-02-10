<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel='stylesheet' href="{{ asset('bootstrap/style.css') }}" />
    <link rel="stylesheet" type="text/css"href="{{asset('css/cadastro.css')}}">

</head>

<body>
    <form method="POST" action="{{ route('registro.pet') }}">
        @csrf
        <section id="test" class="container ">
            <div class="d-flex flex-column align-items-center ">
            <div class="col-6 ">
                <h1 id="test">test</h1>
                <label class="form-label">Nome do animal:</label>
                <input class="form-control" type="text" name="nome" placeholder="Insira o nome  do seu animal" />
            </div>
            <div class="col-6">
                <label class="form-label">raça:</label>
                <input class="form-control" type="text" name="raca" placeholder="Insira a raça do seu animal" />
            </div>
            <div class="col-6">
                <label class="form-label">Peso:</label>
                <input class="form-control" type="text" name="peso" placeholder="Insira o peso atual do animal" />
            </div>
            <div class="col-6">
                <label class="form-label">Idade:</label>
                <input class="form-control" type="number" name="idade" placeholder="Insira a idade do seu animal" />
            </div>
            <div class="col-6">
                <label class="form-label">Dono:</label>
                <input class="form-control" type="text" name="dono" placeholder="Quem é o dono" />
            </div>
            <div class="col-6 container-btn">
                <button class="btn btn-outline-primary" id="sucesso" type="submit">Enviar</button>
            </div>
            <h1></h1>
        </div>
        </section>
    </form>

    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>

</body>

</html>
