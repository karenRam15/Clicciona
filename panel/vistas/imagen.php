<?php
session_start();
header("Content-type: image/jpg");
header("Content-type: image/png");
require_once "../../login/Cl/DBclass.php";
$id=$_GET['id'];
//echo $_SESSION['user_tipo'];
if ($_SESSION['user_tipo']=="1") {
	$sql = "SELECT img_e FROM empresas WHERE correo_e ='$id'";
	$query=mysqli_query($con, $sql);
	while ($imagen=mysqli_fetch_array($query)) {
		echo $imagen['img_e'];
	}
}else if ($_SESSION['user_tipo']=="0") {
	$sql = "SELECT img_p FROM profesionistas WHERE correo_p ='$id'";
	$query=mysqli_query($con, $sql);
	while ($imagen=mysqli_fetch_array($query)) {
		echo $imagen['img_p'];
	}
}
