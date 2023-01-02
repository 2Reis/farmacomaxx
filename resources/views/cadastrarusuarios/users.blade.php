<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usuarios</h1>
    @foreach ( $users as $users)
        <p>name: {{ $users["name"] }}</p>
        <p>email: {{ $users["email"] }}</p>
        <p>id: {{ $users["id"] }}</p>
        <a href="{{ route('editeuser',['id'=>$users["id"]]) }}">Editar</a>
        <a href="{{ route('removeuser',['id'=>$users["id"]]) }}">Remover</a>
    @endforeach   
       
</body>
</html>