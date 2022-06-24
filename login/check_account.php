<?php 
require_once "Cl/DBclass.php";
$correo = $_GET['c'];
$num_confirmacion = $_GET['num'];
$tipo = $_GET['tipo'];
if ($tipo=="1") {
	$sql2 = "UPDATE empresas SET validacion_correo_e='1' WHERE correo_e ='$correo' AND validacion_correo_e='$num_confirmacion'";
}else if ($tipo == "0") {
	$sql2 = "UPDATE profesionistas SET validacion_correo_p='1' WHERE correo_p ='$correo' AND validacion_correo_p='$num_confirmacion'";
}
$query2 = mysqli_query($con, $sql2);
if ($query2) {
	echo "1";
	?>
	<script type="text/javascript">
		alert("Cuenta verificada.");
		window.location="../index.php";
	</script>
<?php 
}else{
	echo "0";
}