@extends('layouts.master')
@section('titulo', 'Tabela de pets')
@section('conteudo')
    <section id="section" style="margin-top: 200px">

    </section>
    <button id="btn-submit">trazer</button>

<body>

    <!--Lista de pets !------>
    <div style="text-align: center">
        @foreach ($pets as $pet)
            <p>{{ $pet->nome }}</p>
            <p>{{ $pet->raca }}</p>
            <p>{{ $pet->peso }}</p>
            <p>{{ $pet->idade }}</p>
            <p>{{ $pet->dono }}</p>
            <button>delete</button>
            <!------End lista !---->
        @endforeach
    </div>
</body>
<script>
    var cont = 0
</script>

</html>
