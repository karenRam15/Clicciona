<?php  
session_start();
$funcion = $_POST['funcion'];
if ($funcion=="1") {
	$_SESSION['user_type_document'] = $_POST['parametro'];
	echo "1";
}else if($funcion=="2"){
	$_SESSION['tipo'] = $_POST['tipo'];
	if ($_POST['tipo']=="0") {
		if ($_POST['profesion']!=null) {
			$_SESSION['profesion']=$_POST['profesion'];
		}
	}
	$_SESSION['plan'] = $_POST['plan'];
	echo "1";
}
?>