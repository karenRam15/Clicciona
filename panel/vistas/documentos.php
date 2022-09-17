<?php 
session_start();
$correo = $_GET['correo'];
header("Content-type: application/pdf");
$sql = "SELECT * FROM documentos_p WHERE correo_p='$correo'";
$query = mysqli_query($con, $sql);
if ($query) {
	while ($fila=mysqli_fetch_array($query)) {
		echo $fila['ine_p'];
	}
}else {
	echo "0";
}
