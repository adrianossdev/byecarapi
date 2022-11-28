<!DOCTYPE html>
<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>ByeCar API</title>
        <style>
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4 text-center">
            <h1>ByeCar API</h1>
            <form action="{{route('login')}}">
                <input type="text" name="email" class="form-control" disabled>
                <br>
                <input type="senha" name="password" class="form-control" disabled>
                <button class="btn btn-primary mt-2" disabled>Consultar token</button>
                <h2>Utilize o ByeCar Client para teste</h2>
            </form>

</div>
        </div>
    </div>
    </body>
</html>
