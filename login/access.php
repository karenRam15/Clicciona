<?php 
session_start();
require_once "Cl/DBclass.php";
$correo = $_POST['email'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$password' AND validacion_correo='1'";
$query = mysqli_query($con, $sql);
if (mysqli_num_rows($query)>0) {
	while ($fila = mysqli_fetch_array($query)) {
		$_SESSION['user_name'] = $fila['primer_nombre'];
		$_SESSION['user_sesion'] = true;
		$_SESSION['user_id'] = $fila['id_usuario'];
	}
	echo "1";
}else{
	echo "0";
}