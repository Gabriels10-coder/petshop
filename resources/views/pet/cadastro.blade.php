<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>

<body>
    <form method="POST" action="{{route('registro.pet')}}">
        @csrf
        <section>
            <div>
                <label>Nome do animal:</label>
                <input type="text" name="nome" placeholder="Insira o nome  do seu animal" />
            </div>
            <div>
                <label>raça:</label>
                <input type="text" name="raça" placeholder="Insira a raça do seu animal" />
            </div>
            <div>
                <label>Peso:</label>
                <input type="text" name="peso" placeholder="Insira o peso atual do animal" />
            </div>
            <div>
                <label>Idade:</label>
                <input type="number" name="idade" placeholder="Insira a idade do seu animal" />
            </div>
            <div>
                <label>dono</label>
                <input type="text" name="dono" placeholder="Quem é o dono" />
            </div>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </section>
    </form>


</body>

</html>
