<?php 
require_once "Cl/DBclass.php";
$password = md5($_POST['pass']);
$correo = $_POST['email'];
$tipo = $_POST['tipo'];
if ($tipo == "1") {
	$sql = "UPDATE empresas SET password_e='$password', reset_pass_e='1' WHERE correo_e='$correo'";
}else if ($tipo=="0") {
	$sql = "UPDATE profesionistas SET password_p='$password', reset_pass_p='1' WHERE correo_p='$correo'";
}
$query = mysqli_query($con, $sql);
if ($query) {
	echo "1";
}else{
	echo "0";
}