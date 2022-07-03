<?php 
session_start();
require_once "../login/Cl/DBclass.php";
$tipo = $_POST['tipo'];
$correo = $_POST['correo'];
$plan = $_POST['plan'];
if ($tipo==1) {
	$sql = "SELECT * FROM empresas WHERE correo_e='$correo'";
	$sql2 = "SELECT * FROM documentos_e WHERE correo_e='$correo'";
}else if ($tipo==0) {
	$sql = "SELECT * FROM profesionistas WHERE correo_p='$correo'";
	$sql2 = "SELECT * FROM documentos_p WHERE correo_p='$correo'";
}
$query = mysqli_query($con, $sql);
$query2 = mysqli_query($con,$sql);
if ($plan == 0) {
	if ($query && $query2) {
		$_SESSION['validar_correo'] = $correo;
		while ($fila1=mysqli_fetch_array($query)) {
			while ($fila2=mysqli_fetch_array($query2)) {
				if ($tipo==1) {
					$json [] = array(
				        'nombres' => $fila1 ['nombres_e'],
				        'apellido_p' => $fila1 ['apellidoP_e'],
				        'apellido_m' => $fila1 ['apellidoM_e'],
				        'servicio' => $fila1 ['servicio_giro_e'],
				        'numero_contacto' => $fila1['numero_contacto_e'],
				    	'localidad' =>	$fila1['localidad_e']);
				}else if ($tipo==0) {
					$json [] = array(
				        'nombres' => $fila1['nombres_p'],
				        'apellido_p' => $fila1 ['apellidoP_p'],
				        'apellido_m' => $fila1 ['apellidoM_p'],
				        'servicio' => $fila1 ['servicio_p'],
				        'numero_contacto' => $fila1['numero_contacto_p'],
				    	'localidad' =>	$fila1['localidad_p']);
				}
			}
		}
	}
}else if ($plan ==1) {
	// code...
}else if ($plan==2) {
	// code...
}else if ($plan==3) {
	// code...
}
echo json_encode($json);
?>