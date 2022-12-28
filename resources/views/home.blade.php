<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProjectLaravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dd4ec23b60.js" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-5 text-center"> 
                    <img src="https://files.passeidireto.com/1273a534-7a0f-4051-8347-b3c8b6944083/1273a534-7a0f-4051-8347-b3c8b6944083.png" alt="">
                </div>
                <div class="col-6 p-5 text-center">
                    <a href="{{route('farma')}}">
                        <input type="button" value="Lista de produtos" class="btn btn-primary">
                    </a>                    
                </div>
                <div class="col-6 p-5 text-center">
                    <a href="{{route('medicamentos',['name'=>'generico'])}}">
                        <input type="button" value="Lista de Genericos" class="btn btn-secondary"> 
                    </a>                       
                </div>
                <div id="footer" class="col-12 text-center p-5">
                    <i class="fa fa-copyright" aria-hidden="true"></i>
                </div>
            </div>
         </div>
    </section>
     
</body>

</html>