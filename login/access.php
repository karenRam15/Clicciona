<?php 
session_start();
require_once "Cl/DBclass.php";
$correo = $_POST['email'];
$_POST['password'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM profesionistas WHERE correo_p='$correo' AND password_p='$password' AND validacion_correo_p='1'";
$query = mysqli_query($con, $sql);
if (mysqli_num_rows($query)>0) {
		while ($fila = mysqli_fetch_array($query)) {
			$_SESSION['user_name'] = $fila['primer_nom_p']." ".$fila['apellidoP_p'];
			$_SESSION['user_sesion'] = true;
			$_SESSION['user_correo'] = $fila['correo_p'];
			$_SESSION['user_tipo'] = 0;
		}
		echo "1";
}else{
	$sql2 = "SELECT * FROM empresas WHERE correo_e = '$correo' AND password_e = '$password' AND validacion_correo_e='1'";
	$query2 = mysqli_query($con, $sql2);
	if (mysqli_num_rows($query2)>0) {
		while ($fila = mysqli_fetch_array($query)) {
			$_SESSION['user_name'] = $fila['primer_nombre_encargado']." ".$fila['apellido_p_encargado'];
			$_SESSION['user_sesion'] = true;
			$_SESSION['user_correo'] = $fila['correo_e'];
			$_SESSION['user_tipo'] = 1;
		}
		echo "1";
	}else{
		echo "0";
	}
}