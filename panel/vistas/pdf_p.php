<?php 
require_once "../../login/Cl/DBclass.php";
header("Content-type: application/pdf");
$correo = $_GET['correo'];
switch ($_GET['documento']) {
	case '1':
		$sql = "SELECT ine_p FROM documentos_p WHERE correo_p='$correo'";
		$query = mysqli_query($con, $sql);
		if ($query) {
			while ($fila=mysqli_fetch_array($query)) {
				echo $fila['ine_p'];
			}
		}
		break;
	case '2':
		$sql = "SELECT cedula_p FROM documentos_p WHERE correo_p='$correo'";
		$query = mysqli_query($con, $sql);
		if ($query) {
			while ($fila=mysqli_fetch_array($query)) {
				echo $fila['cedula_p'];
			}
		}
		break;
	case '3':
		
		break;
	case '4':
		// code...
		break;
	default:
		// code...
		break;
}
