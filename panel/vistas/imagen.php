<?php
header("Content-type: image/jpg");
require_once "../../login/Cl/DBclass.php";
$id=$_GET['id'];
$sql=mysqli_query($con, "SELECT img FROM usuarios WHERE id_usuario='$id'");
while ($imagen=mysqli_fetch_array($sql)) {
	echo $imagen['img'];
}