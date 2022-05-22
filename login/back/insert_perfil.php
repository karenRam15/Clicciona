<?php
ob_start();
session_start();
include("conexion.php");

$formadetrabajo=$_POST['formadetrabajo'];
$profesion=$_POST['profesion'];
$especialidad=$_POST['especialidad'];
$ncontacto=$_POST['ncontacto'];
$costohonorarios=$_POST['costohonorarios'];
$ubicaciongeo=$_POST['ubicaciongeo'];
$beneservicios=$_POST['beneservicios'];
$ubicasucursales=$_POST['ubicasucursales'];
$exlaboral=$_POST['exlaboral'];
$cface=$_POST['cface'];
$ctoutube=$_POST['ctoutube'];
$cmessenger=$_POST['cmessenger'];
$cwhatsapp=$_POST['cwhatsapp'];
$user_id=$_SESSION['user_id'];


$sql    = "SELECT * FROM user_perfil WHERE user_id=$user_id;";
$result = mysqli_query($conn, $sql);

 if($result->num_rows > 0 ){

 	$sql = "UPDATE user_perfil SET formadetrabajo='$formadetrabajo',profesion='$profesion',especialidad='$especialidad',ncontacto='$ncontacto',costohonorarios='$costohonorarios',ubicaciongeo='$ubicaciongeo',beneservicios='$beneservicios',ubicasucursales='$ubicasucursales',exlaboral='$exlaboral',cface='$cface',ctoutube='$ctoutube',cmessenger='$cmessenger',cwhatsapp='$cwhatsapp' where user_id=$user_id;";
	if (mysqli_query($conn, $sql)) {
	      echo "Correcto";
	} else {
	      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn); 
 }else{

 	$sql = "INSERT INTO user_perfil (formadetrabajo,profesion,especialidad,ncontacto,costohonorarios,ubicaciongeo,beneservicios,ubicasucursales,exlaboral,cface,ctoutube,cmessenger,cwhatsapp,user_id) VALUES ('$formadetrabajo','$profesion','$especialidad','$ncontacto','$costohonorarios','$ubicaciongeo','$beneservicios','$ubicasucursales','$exlaboral','$cface','$ctoutube','$cmessenger','$cwhatsapp',$user_id)";
	if (mysqli_query($conn, $sql)) {
	      echo "Correcto";
	} else {
	      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn); 
 }

?>
