<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    @include('sweetalert::alert')
     <div class="col-12 d-flex justify-content-center" style="height: 100vh;background-color: purple">
         <div class="col-8 m-auto">
            <section class="w-100 border shadow-lg d-flex h-5 rounded-5 bg-white">
                <article class="w-50 d-flex ">
                    <img src="img/carro.jpg" alt="" class="img-fluid rounded-5 ">
                </article>
                <article class="w-50 h-100 p-2">
                     <form action="{{route('Register')}}" class="w-100 h-100" method="POST">
                        @csrf
                        <div class="w-100">
                            <h1 class="text-success">Registro</h1>
                        </div>
                         <div class="w-100 mt-3" >
                           <input type="text" class="form-control w-100 rounded-5" name="name">
                           <label for="" class="text-success px-3">Ingresa tu nombre.</label>
                          </div>
                         <div class="w-100 mt-3">
                            <input type="text" class="form-control w-100 rounded-5" name="email">
                            <label for="" class="text-success px-3">Ingrese email.</label>
                         </div>
                         <div class="w-100 mt-3">
                            <input type="password" class="form-control w-100 rounded-5" name="password">
                            <label for="" class="text-success px-3">Ingresa tu contrasñea.</label>
                         </div>
                         <a href="{{route('verLogin')}}" class="nav-link px-3 mt-3" >ya tienes cuenta? inicia sesion</a>
                         <div class="w-100 mt-3">
                            <button class="btn btn-success w-100 rounded-5">Registrarse</button>
                         </div>
                     </form>
                </article>
            </section>
         </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>