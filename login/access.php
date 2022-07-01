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
			$_SESSION['user_name'] = $fila['nombres_p']." ".$fila['apellidoP_p']." ".$fila['apellidoM_p'];
			$_SESSION['user_sesion'] = true;
			$_SESSION['user_correo'] = $fila['correo_p'];
			$_SESSION['user_tipo'] = 0;
			$_SESSION['user_plan'] = $fila['plan_contratado_p'];
		}
		echo "1";
}else{
	$sql2 = "SELECT * FROM empresas WHERE correo_e = '$correo' AND password_e = '$password' AND validacion_correo_e='1'";
	$query2 = mysqli_query($con, $sql2);
	if (mysqli_num_rows($query2)>0) {
		while ($fila = mysqli_fetch_array($query2)) {
			$_SESSION['user_name'] = $fila['nombres_e']." ".$fila['apellidoP_e']." ". $fila['apellidoM_e'];
			$_SESSION['user_sesion'] = true;
			$_SESSION['user_correo'] = $fila['correo_e'];
			$_SESSION['user_tipo'] = 1;
			$_SESSION['user_plan'] = $fila['plan_contratado_e'];
		}
		echo "1";
	}else{
		echo "0";
	}
}