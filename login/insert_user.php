<?php
require_once "Cl/DBclass.php";

$primer_nombre = $_POST['name_register'];
if (isset($_POST['name2_register']) && $_POST['name2_register']!="") {
    $segundo_nombre = $_POST['name2_register'];
}else{
    $segundo_nombre = "NULL";
}
if (isset($_POST['name3_register']) && $_POST['name3_register']!="") {
    $tercer_nombre = $_POST['name3_register'];
}else{
    $tercer_nombre = "NULL";
}
$apellido_p = $_POST['apellido_p_register'];
$apellido_m = $_POST['apellido_m_register'];
$email = $_POST['email_register'];
$pass =  md5($_POST['password_register'], false);
$tipo_usuario = $_POST['tipo_usuario_register'];

$imagen = $_FILES['imagen_register']['name'];
$guardar_imagen = $_FILES['imagen_register']['tmp_name'];
$img = addslashes(file_get_contents($guardar_imagen));

$sql = "SELECT*FROM usuarios WHERE correo='$email'";
$query = mysqli_query($con, $sql);
if(mysqli_num_rows($query)>0){
    echo "2";
}else{
    $sql2 = "INSERT INTO usuarios VALUES(NULL, '$primer_nombre', '$segundo_nombre', '$tercer_nombre', '$apellido_p', '$apellido_m', '$email', '$pass', '$tipo_usuario', '0','1','1','0','$img')";
    $query2 = mysqli_query($con, $sql2);
    if($query2>0){
        echo "1";
    }else{
        echo "0";
    }
}