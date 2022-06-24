<?php
session_start();
require_once "Cl/DBclass.php";
if (isset($_SESSION['user_type_document'])) {
    if ($_SESSION['user_type_document']=="1") {
        $imagen = $_FILES['imagen_empresa']['tmp_name'];
        $imagen_empresa = addslashes(file_get_contents($imagen));
        $nombre_empresa = $_POST['nombre_empresa'];
        $primer_nombre_encargado = $_POST['primer_nombre_encargado'];
        if (isset($_POST['segundo_nombre_encargado']) && $_POST['segundo_nombre_encargado']!="") {
            $segundo_nombre_encargado = $_POST['segundo_nombre_encargado'];
        }else{
            $segundo_nombre_encargado = "NULL";
        }
        if (isset($_POST['tercer_nombre_encargado']) && $_POST['tercer_nombre_encargado']!="") {
            $tercer_nombre_encargado = $_POST['tercer_nombre_encargado'];
        }else{
            $tercer_nombre_encargado = "NULL";
        }
        $apellido_p_encargado = $_POST['apellido_p_encargado'];
        $apellido_m_enargado = $_POST['apellido_m_encargado'];
        $correo_empresa = $_POST['correo_empresa'];
        $pass_empresa =  md5($_POST['password_empresa'], false);
        $sql = "SELECT * FROM empresas WHERE correo='$correo_empresa'";
        $query = mysqli_query($con, $sql);
        if(mysqli_num_rows($query)>0){
            echo "2";
        }else{
            $sql2 = "INSERT INTO empresas VALUES ('$correo_empresa', '$primer_nombre_encargado', '$segundo_nombre_encargado', '$tercer_nombre_encargado', '$apellido_p_encargado', '$apellido_m_encargado', '$pass', '0', NULL, NULL, NULL, NULL, NULL,NULL, '0', '0', '$imagen_empresa')";
            $query2 = mysqli_query($con, $sql2);
            if(mysqli_num_rows($query2)>0){
                $sql3 = "INSERT INTO documentos_e VALUES ('$correo_empresa', NULL, false, NULL, false, NULL, false, NULL, false, NULL,false,NULL,false)";
                $query3=mysqli_query($con, $sql3);
                if (mysqli_num_rows($query3)>0) {
                    echo "1";   
                }else{
                    echo "0";
                }
            }else{
                echo "0";
            }
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
        $sql = "SELECT * FROM profesionistas WHERE correo_p='$email_profesionista'";
        $query = mysqli_query($con, $sql);
        if(mysqli_num_rows($query)>0){
            echo "2";
        }else{
            $sql2 = "INSERT INTO profesionistas VALUES ('$email_profesionista', '$primer_nombre_profesionista', '$segundo_nombre_profesionista', '$tercer_nombre_profesionista', '$apellido_p_profesionista', '$apellido_m_profesionista', '$password_profesionista', '0', NULL, NULL, NULL, NULL, NULL, NULL, '$estado_profesionista', '$localidad_profesionista', NULL, '0', '0', '$imagen_profesionista')";
            $query2 = mysqli_query($con, $sql2);
            if($query2){
                $sql3 = "INSERT INTO documentos_p(correo_p) VALUES ('$email_profesionista')";
                $query3 = mysqli_query($con, $sql3);
                if ($query3>0) {
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