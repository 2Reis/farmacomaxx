<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <form action="{{route('edituser',['id'=>$users->id])}}" method="GET">
        @csrf
    <div class="container">
        <div class="row">
          <div class="col-6 col-sm-3">
            <label for="nome">Nome:</label>
            <input type="text" name="name" value="{{$users->name}}">
          </div>
          <div class="col-6 col-sm-3">
            <label for="nome">Email:</label>
            <input type="text" name="email" value="{{$users->email}}">
          </div>
          <label for="password">Senha:</label>
            <input type="text" name="password" value="{{$users->password}}">
          </div>
          <div class="col-6 col-sm-3">
        <button type="submit" class="btn btn-primary">Editar</button>
          </div>
      </div>
    </form>