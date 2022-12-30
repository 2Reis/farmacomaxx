<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Usuarios</h1>

    <input class="form-control form-control-lg" type="text" name="name">      
    <input class="form-control" type="text" name="email">
    <input class="form-control form-control-sm" type="text" name="senha">
    <form action="{{ rout('user.store') }}" method="POST">
        @csrf
        Nome: <input type="text" name="name">
        <br>  
        Email: <input type="text" name="email">
        <br>  
        Senha: <input type="password" name="senha">
        <br>  
    </form>    
</body>
</html>