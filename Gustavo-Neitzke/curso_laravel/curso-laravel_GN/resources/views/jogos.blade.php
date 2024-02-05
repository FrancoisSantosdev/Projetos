<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>testando routes com views</h1>
    <p>Id: {{ $id }}</p>
    <p>Nome: {{ $nome }} </p>
    {{-- <p>Id do jogo: {{$idJogo}}</p>
    <p>Nome do jogo: {{$nomeJogo}}</p> --}}
    <a href="{{ route('hame-index')}}">Clique aqui</a>
</body>
</html>
