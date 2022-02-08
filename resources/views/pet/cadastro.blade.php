<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel='stylesheet' href="{{ asset('bootstrap/style.css') }}" />
</head>

<body>
    <form method="POST" action="{{ route('registro.pet') }}">
        @csrf
        <section class="container column align-items-center">
            <div class="col">
                <label class="form-label">Nome do animal:</label>
                <input class="form-control" type="text" name="nome" placeholder="Insira o nome  do seu animal" />
            </div>
            <div class="col">
                <label class="form-label">raça:</label>
                <input class="form-control" type="text" name="raça" placeholder="Insira a raça do seu animal" />
            </div>
            <div class="col">
                <label class="form-label">Peso:</label>
                <input class="form-control" type="text" name="peso" placeholder="Insira o peso atual do animal" />
            </div>
            <div class="col">
                <label class="form-label">Idade:</label>
                <input class="form-control" type="number" name="idade" placeholder="Insira a idade do seu animal" />
            </div>
            <div class="col">
                <label class="form-label">Dono:</label>
                <input class="form-control "  type="text" name="dono" placeholder="Quem é o dono" />
            </div>
            <div class="col">
                <button class="btn btn-outline-primary " type="submit">Enviar</button>
            </div>
        </section>
    </form>

    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>

</body>

</html>
