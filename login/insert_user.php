<?php
session_start();
require_once "Cl/DBclass.php";
if (isset($_POST['correo_empresa'])) {
  $correo = $_POST['correo_empresa'];
}else if (isset($_POST['email_profesionista'])) {
  $correo = $_POST['email_profesionista'];
}
$sql = "SELECT * FROM empresas WHERE correo_e='$correo'";
$sql2 = "SELECT * FROM profesionistas WHERE correo_p='$correo'";
$query = mysqli_query($con, $sql) or die("Error al consultar las empresas.");
$query3 = mysqli_query($con, $sql2) or die("Error al consultar los profesionistas.");
if(mysqli_num_rows($query)>0){
  echo "2";
}else{
  if (mysqli_num_rows($query3)>0) {
    echo "2";
  }else{
    if (isset($_SESSION['user_type_document'])) {
      if ($_SESSION['user_type_document']=="1") {
        $imagen = $_FILES['imagen_empresa']['tmp_name'];
        $imagen_empresa = addslashes(file_get_contents($imagen));
        $nombre_empresa = $_POST['nombre_empresa'];
        $nombre_encargado_total = $_POST['primer_nombre_encargado'];
        if (isset($_POST['segundo_nombre_encargado']) && $_POST['segundo_nombre_encargado']!="") {
          $nombre_encargado_total = $_POST['primer_nombre_encargado']." ".$_POST['segundo_nombre_encargado'];
        }else if (isset($_POST['tercer_nombre_encargado']) && $_POST['tercer_nombre_encargado']!="") {
          $nombre_encargado_total = $_POST['primer_nombre_encargado']." ".$_POST['segundo_nombre_encargado']." ".$_POST['tercer_nombre_encargado'];
        }
        $apellido_p_encargado = $_POST['apellido_p_encargado'];
        $apellido_m_encargado = $_POST['apellido_m_encargado'];
        $correo = $_POST['correo_empresa'];
        $pass_empresa =  md5($_POST['password_empresa'], false);
        $sql2 = "INSERT INTO empresas VALUES ('$correo', '$nombre_encargado_total', '$apellido_p_encargado', '$apellido_m_encargado','0', '$pass_empresa', '0','0', NULL,'0', NULL,'0', NULL,'0', NULL,'0', NULL,'0',NULL,'0', '1', NULL,'0', '0', '0', '0','$imagen_empresa','0')";
        $query2 = mysqli_query($con, $sql2) or die("Error al insertar en las empresas: " .mysqli_error($con));
        if($query2){
          $sql3 = "INSERT INTO documentos_e VALUES ('$correo', NULL, false, NULL, false, NULL, false, NULL, false, NULL,false,NULL,false)";
          $query3=mysqli_query($con, $sql3) or die("Error al insertar en documentos: ".mysqli_error($con));
          if ($query3) {
            echo "1";   
          }else{
            echo "0";
          }
        }else{
          echo "0";
        }
      }else if ($_SESSION['user_type_document']=="0") {
        $imagen = $_FILES['imagen_profesionista']['tmp_name'];
        $imagen_profesionista = addslashes(file_get_contents($imagen));
        $carrera_profesionista = $_POST['carrera_profesionista'];
        $primer_nombre_profesionista = $_POST['primer_nombre_profesionista'];
        if (isset($_POST['segundo_nombre_profesionista']) && $_POST['segundo_nombre_profesionista']!="") {
          $segundo_nombre_profesionista = $_POST['segundo_nombre_profesionista'];
        }else{
          $segundo_nombre_profesionista = "NULL";
        }
        if (isset($_POST['tercer_nombre_profesionista']) && $_POST['tercer_nombre_profesionista']!="") {
          $tercer_nombre_profesionista = $_POST['tercer_nombre_profesionista'];
        }else{
          $tercer_nombre_profesionista = "NULL";
        }
        $apellido_p_profesionista = $_POST['apellido_p_profesionista'];
        $apellido_m_profesionista = $_POST['apellido_m_profesionista'];
        $email_profesionista = $_POST['email_profesionista'];
        $estado_profesionista = $_POST['estado_profesionista'];
        $localidad_profesionista = $_POST['localidad_profesionista'];
        $password_profesionista =  md5($_POST['password_profesionista'], false);
        $sql2 = "INSERT INTO profesionistas VALUES ('$email_profesionista', '$primer_nombre_profesionista', '$segundo_nombre_profesionista', '$tercer_nombre_profesionista', '$apellido_p_profesionista', '$apellido_m_profesionista', '0', '$password_profesionista', '$carrera_profesionista','0','0', NULL,'0', NULL, '0', NULL, '0', NULL,'0', NULL, '0', NULL,'0', NULL,'0', '$estado_profesionista', '$localidad_profesionista','0', '0', '0','0', '$imagen_profesionista','0')";
        $query2 = mysqli_query($con, $sql2) or die("Error al insertar en profesionistas".mysqli_error($con));
        if($query2){
          $sql3 = "INSERT INTO documentos_p(correo_p) VALUES ('$email_profesionista')";
          $query3 = mysqli_query($con, $sql3) or die("Error al insertar en los documentos".mysqli_error($con));
          if ($query3) {
            echo "1";
          }else{
            echo "0";
          }
        }else{
          echo "0";
        }
      }
    }
  }   
}