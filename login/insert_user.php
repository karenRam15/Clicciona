<?php
require_once "Cl/DBclass.php";

$primer_nombre = $_POST['primer_nombre_register'];
if (isset($_POST['segundo_nombre_register']) && $_POST['segundo_nombre_register']!="") {
    $segundo_nombre = $_POST['segundo_nombre_register'];
}else{
    $segundo_nombre = "NULL";
}
if (isset($_POST['tercer_nombre_register']) && $_POST['tercer_nombre_register']!="") {
    $tercer_nombre = $_POST['tercer_nombre_register'];
}else{
    $tercer_nombre = "NULL";
}
$apellido_p = $_POST['apellido_p_register'];
$apellido_m = $_POST['apellido_m_register'];
$email = $_POST['email_register'];
$pass =  md5($_POST['pass_register'], false);
$tipo_usuario = $_POST['tipo_usuario_register'];

$imagen = $_FILES['imagen_register']['name'];
$guardar_imagen = $_FILES['imagen_register']['tmp_name'];
$img = addslashes(file_get_contents($guardar_imagen));

$sql = "SELECT*FROM usuarios WHERE correo='$email'";
$query = mysqli_query($con, $sql);
if(mysqli_num_rows($query)>0){
    echo "2";
}else{
    $sql2 = "INSERT INTO usuarios VALUES(NULL, '$primer_nombre', '$segundo_nombre', '$tercer_nombre', '$apellido_p', '$apellido_m', '$email', '$pass', '$tipo_usuario', '0','1','1','$img')";
    $query2 = mysqli_query($con, $sql2);
    if($query2){
        echo "1";
    }else{
        echo "0";
    }
}