<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

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
    var test ='test';
    var test= 'test';
    var test = 'test';
</script>

</html>
