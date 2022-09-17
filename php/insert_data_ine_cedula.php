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
$sql= "UPDATE profesionistas SET validacion_documentos_p='1' WHERE correo_p='$correo'";
if ($query_insert) {
	$query_sql= mysqli_query($con, $sql);
	if ($query_sql) {
		echo "1";
	}else{
		echo "0";
	}
}else{
	echo "0";
} 
//Manejo de estatus
//0 Hay documentos por subir.
//1 Documentos en revision.
//2 Informacion revisada.