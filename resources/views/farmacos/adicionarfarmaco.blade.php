<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adicionar farmacos</h1>
    <form action="{{url('/addFarm')}}" method="POST">
        @csrf
    <div class="container">
        <div class="row">
          <div class="col-6 col-sm-3">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" placeholder="Insira o nome..">
          </div>
          <div class="col-6 col-sm-3">
            <label for="nome">Preço:</label>
            <input type="text" name="price" placeholder="Preço..">
          </div>
          <div class="col-6 col-sm-3">
            <label for="category">Categoria:</label>
            <input class="form-control form-control-sm" type="text" name="category" placeholder="Categoria..">
            <div class="col-auto">
        <button type="submit" class="btn btn-primary">Adicionar</button>
          </div>
      </div>
    </form>































    {{-- <div class="row">
        <label for="nome">Nome:</label>
    <input type="texte" name="nome" placeholder="Insira o nome..">
    <input class="form-control form-control-lg" type="text" name="name">
    </div>
    <div class="add-price">
        <label for="nome">Preço:</label>
    <input type="texte" name="price" placeholder="Preço..">
    <input class="form-control" type="text" name="price">
    </div>
    <input class="form-control form-control-sm" type="text" name="category">
    <div class="col-auto">
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </div> --}}


</body>
</html>

