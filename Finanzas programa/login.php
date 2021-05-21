<?php
include 'conexion.php';
session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Alertify CSS-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./js/css/alertify.css">
    <link rel="stylesheet" href="./js/css/themes/default.css">
    <!--Alertify and Jquery-->
    <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./js/alertify.js"></script>
  </head>
  <body>
    <?php include 'menu.php' ?>

    <div class="todo d-flex align-items-center justify-content-center">


    <form class="form-signin d-flex flex-column align-items-center" action="" method="post">
       <img src="./img/log.png" class="d-inline-block align-top mb-4" alt="logo">
       <input type="text" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
       <input type="password" name="contrasena" class="form-control mt-3" placeholder="Contraseña" required>
       <div class="checkbox mb-3">
       </div>
       <button class="btn btn-lg btn-primary btn-block w-100" type="submit" name="btn-ingresar">Ingresar</button>
     </form>
   </div>

   <?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $usuario=$_POST["usuario"];
      $contrasena=$_POST["contrasena"];
      if(isset($_POST["btn-ingresar"])){
      $sql="SELECT * FROM usuario WHERE nombreUsuario='$usuario' AND contrasena='$contrasena'";
      $resultado = mysqli_query($conn,$sql);
      $fi=mysqli_num_rows($resultado);

      // If result matched $myusername and $mypassword, table row must be 1 row
      echo $fi;
      if($fi == 1) {
        echo '<script>
        alertify.set("notifier","position", "top-center");
        alertify.success("Ingreso exitoso");
        </script>';

        echo '<script>
        setInterval(function(){location.href="service.php";}, 2000);
        </script>';

      }else {
        echo '<script>
        alertify.set("notifier","position", "top-center");
        alertify.error("Ingreso fallido");
        </script>';
      }
    }
}
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
