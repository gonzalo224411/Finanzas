<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="finanzas";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($conn){
  echo '<script>console.log("Conexión exitosa")</script>';
}

?>
