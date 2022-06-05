<?php 
require_once "Cl/DBclass.php";
$correo = $_GET['c'];
$num_confirmacion = $_GET['num'];
$sql = "SELECT * FROM usuarios WHERE correo ='$correo' AND validacion_correo='$num_confirmacion'";
$query = mysqli_query($con, $sql);
$sql2 = "UPDATE usuarios SET validacion_correo='1' WHERE correo ='$correo' AND validacion_correo='$num_confirmacion'";
if ($query) {
	$query2 = mysqli_query($con, $sql2);
	if ($query2) {
		echo "1";
		?>
		<script type="text/javascript">
			alert("Cuenta verificada");
			window.location("index.php");
		</script>
		<?php 
	}else{
		echo "2";
	}
}else{
	echo "0";
}
