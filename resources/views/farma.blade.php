<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Farmacos</h1>
    @foreach ( $farmacos as $farmaco)
        <p>name: {{ $farmaco["name"] }}</p>
        <p>id: {{ $farmaco["id"] }}</p>
        <a href="{{ route('editefarmaco',['id'=>$farmaco["id"]]) }}">Editar</a>
        <a href="{{ route('removefarmaco',['id'=>$farmaco["id"]]) }}">Remover</a>

    @endforeach
    
       
</body>
</html>