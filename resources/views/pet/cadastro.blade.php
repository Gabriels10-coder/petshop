<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel='stylesheet' href="{{ asset('bootstrap/style.css') }}" />
    <link rel="stylesheet" type="text/css"href="css/app.css">

</head>

<body>
    <form method="POST" action="{{ route('registro.pet') }}">
        @csrf
        <section id="test" class="container ">
            <div class="d-flex flex-column align-items-center ">
            <div class="col-3 ">
                <h1>test</h1>
                <label class="form-label">Nome do animal:</label>
                <input class="form-control" type="text" name="nome" placeholder="Insira o nome  do seu animal" />
            </div>
            <div class="col-3">
                <label class="form-label">raça:</label>
                <input class="form-control" type="text" name="raça" placeholder="Insira a raça do seu animal" />
            </div>
            <div class="col-3">
                <label class="form-label">Peso:</label>
                <input class="form-control" type="text" name="peso" placeholder="Insira o peso atual do animal" />
            </div>
            <div class="col-3">
                <label class="form-label">Idade:</label>
                <input class="form-control" type="number" name="idade" placeholder="Insira a idade do seu animal" />
            </div>
            <div class="col-3">
                <label class="form-label">Dono:</label>
                <input class="form-control" type="text" name="dono" placeholder="Quem é o dono" />
            </div>
            <div class="col-3">
                <button class="btn btn-outline-primary " type="submit">Enviar</button>
            </div>
        </div>
        </section>
    </form>

    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>

</body>

</html>
