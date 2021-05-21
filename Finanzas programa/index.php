<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finanzas UPC</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  </head>
  <body>
    <?php
    include 'menu.php'
    ?>


    <div class="portada d-flex align-items-center container">
      <div class="row d-flex align-items-center">
        <div class="texto-portada-desk col-6 d-none d-md-block">
            <h2>DESCUENTOS</h2>
            <p>Te ayudaremos a administrar tu carteras de letras, tanto en soles como en dólares</p>
            <a href="./login.html" class="btn btn-primary">Login</a>
            <a href="./register.html" class="btn btn-secondary">Regístrate</a>
        </div>

        <div class="texto-portada-mobile col-12 d-md-none text-center mt-5">
            <h2>DESCUENTOS</h2>
            <p>Te ayudaremos a administrar tu carteras de letras, tanto en soles como en dólares</p>
            <a href="login.php" class="btn btn-primary">Login</a>
            <a href="registro.php" class="btn btn-secondary">Regístrate</a>
        </div>
        <div class="img-portada col-12 col-md-6 d-none d-md-block">
            <img class="w-100" src="./img/imagenPortada.jpg" alt="imagen de portada">
        </div>

      </div>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
