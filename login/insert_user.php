<?php
require_once "Cl/DBclass.php";

$primer_nombre = $_POST['primer_nombre'];
$segundo_nombre =$_POST['segundo_nombre'];
$tercer_nombre =$_POST['tercer_nombre'];
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$email = $_POST['email'];
$pass =  md5($_POST['pass'], false);
$tipo_usuario = $_POST['tipo_usuario'];
$sql = "SELECT*FROM usuarios WHERE correo='$email'";
$query = mysqli_query($con, $sql);
if(mysqli_num_rows($query)>0){
    echo "2";
}else{
    $sql2 = "INSERT INTO usuarios VALUES(NULL, '$primer_nombre', '$segundo_nombre', '$tercer_nombre', '$apellido_p', '$apellido_m', '$email', '$pass', '$tipo_usuario', '0','0')";
    $query2 = mysqli_query($con, $sql2);
    if($query2){
        echo "1";
    }else{
        echo "0";
    }
}