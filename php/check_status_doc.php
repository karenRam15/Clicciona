<?php 
session_start();
require_once "../login/Cl/DBclass.php";
$tipo = $_SESSION['user_tipo'];
$correo = $_SESSION['user_correo'];
if ($_SESSION['user_tipo']=="0") {
	$sql = "SELECT * FROM profesionistas WHERE correo_p='$correo'";
	if ($query = mysqli_query($con, $sql)) {
		while ($fila= mysqli_fetch_array($query)) {
			echo $fila['validacion_documentos_p'];
		}
	}
}else if ($_SESSION['user_tipo']=="1") {
	echo "2";
}else if ($_SESSION['user_tipo']=="3") {
	echo "2";
}