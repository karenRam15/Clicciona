<?php
$servername = "localhost";
$database = "login";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Error en la conexion: " . mysqli_connect_error());
}
 
//echo "Conexion con exito";
 

?>