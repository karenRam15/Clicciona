<?php 
session_start();
$correo = $_SESSION['user_correo'];
require_once "../login/Cl/DBclass.php";
$ine = $_FILES['ine']['tmp_name'];
$ine_proccess = addslashes(file_get_contents($ine));
$cedula = $_FILES['cedula']['tmp_name'];
$cedula_proccess = addslashes(file_get_contents($cedula));
$insert = "UPDATE documentos_p SET check_ine_p='0', ine_p='$ine_proccess', check_cedula_p='0', cedula_p='$cedula_proccess' WHERE correo_p='$correo'";
$query_insert = mysqli_query($con, $insert);
if ($query_insert) {
	echo "1";
}else{
	echo "0";
}