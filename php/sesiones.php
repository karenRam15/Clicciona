<?php  
session_start();
$funcion = $_POST['funcion'];
$parametro = $_POST['parametro'];
if ($funcion=="1") {
	$_SESSION['user_type_document'] = $parametro;
	echo "1";
}
?>