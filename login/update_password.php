<?php 
require_once "Cl/DBclass.php";
$password = md5($_POST['pass']);
$correo = $_POST['email'];
$sql = "UPDATE usuarios SET password='$password', reset_password='1' WHERE correo='$correo'";
$query = mysqli_query($con, $sql);
if ($query) {
	echo "1";
}else{
	echo "0";
}