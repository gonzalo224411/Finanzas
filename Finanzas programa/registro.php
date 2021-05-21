<?php
include 'conexion.php';
session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Registro</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

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

    <div class="signup-form">
      <form class="d-flex flex-column justify-content-center" action="" method="post">
          <img src="./img/log.png" class="d-inline-block align-top mb-4" alt="logo">

          <div class="form-group">
                  <input type="text" class="form-control" name="nombre_empresa" placeholder="Nombre de empresa" required="required">
              </div>

          <div class="form-group">
              	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
              </div>

          <div class="form-group">
  			<div class="row">
  				<div class="col"><input type="text" class="form-control" name="telefono" placeholder="Teléfono" required="required" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"></div>
  				<div class="col"><input type="text" class="form-control" name="ruc" placeholder="Ruc" required="required" maxlength="11" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"></div>
  			</div>
          </div>

  		<div class="form-group">
              <input type="text" class="form-control" name="usuario" placeholder="Nombre de usuario" required="required">
          </div>
  		<div class="form-group">
              <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required="required">
          </div>

  		<div class="form-group">
              <button type="submit" class="btn btn-success btn-lg btn-block" name="btn-registrar">Registrar</button>
      </div>
      </form>
  	<div class="text-center">Ya tienes una cuenta? <a href="./login.php">Iniciar sesión</a></div>
  </div>



<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $nombre_empresa=$_POST["nombre_empresa"];
  $email=$_POST["email"];
  $telefono=$_POST["telefono"];
  $ruc=$_POST["ruc"];
  $usuario=$_POST["usuario"];
  $contrasena=$_POST["contrasena"];

  if(isset($_POST["btn-registrar"])){
      $sqlgrabar="INSERT INTO usuario(nombreEmpresa,telefono,ruc,correo,nombreUsuario,contrasena) VALUES ('$nombre_empresa','$telefono','$ruc','$email','$usuario','$contrasena')";
      if(mysqli_query($conn,$sqlgrabar)){
        echo '<script>
        alertify.set("notifier","position", "top-center");
        alertify.success("Registro exitoso");
        </script>';

        echo '<script>
        setInterval(function(){location.href="login.php";}, 2000);
        </script>';
      }
      else{
        echo '<script>
        alertify.set("notifier","position", "top-center");
        alertify.error("Regitro fallido");
        </script>';
      }
    }
  }
 ?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
