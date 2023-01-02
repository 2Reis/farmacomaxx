<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Farmaco</h1>
    <form action="{{route('upFarm',['id'=>$medicamento->id])}}" method="GET">
        @csrf
    <div class="container">
        <div class="row">
          <div class="col-6 col-sm-3">
            <label for="nome">Nome</label>
            <input type="text" name="name" value="{{$medicamento->name}}">
          </div>
          <div class="col-6 col-sm-3">
            <label for="nome">Preço</label>
            <input type="text" name="price" value="{{$medicamento->price}}">
          </div>
          <div class="col-6 col-sm-3">
            <label for="category">Categoria</label>
            <input class="form-control form-control-sm" type="text" name="category" value="{{$medicamento->category}}">
            <div class="col-auto">
        <button type="submit" class="btn btn-primary">Editar</button>
          </div>
      </div>
    </form>