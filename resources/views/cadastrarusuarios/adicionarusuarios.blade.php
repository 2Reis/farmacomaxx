<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adicionar Usuarios</h1>
    <form action="{{url('/adicionarusuarios')}}" method="GET">
        @csrf
    <div class="container">
        <div class="row">
          <div class="col-6 col-sm-3">
            <label for="nome">Nome:</label>
            <input type="text" name="name" placeholder="Insira o nome..">
          </div>
          <div class="col-6 col-sm-3">
            <label for="nome">Email:</label>
            <input type="text" name="price" placeholder="Email..">
          </div>
          <div class="col-6 col-sm-3">
            <label for="category">UserID:</label>
            <input class="form-control form-control-sm" type="text" name="category" placeholder="UserID..">
            <div class="col-auto">
        <button type="submit" class="btn btn-primary">Adicionar</button>
          </div>
      </div>
    </form>