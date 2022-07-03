<?php 
session_start();
require_once "../login/Cl/DBclass.php";
$sql="SELECT * FROM empresas WHERE validacion_correo_e='1' AND validacion_documentos_e='1'";
$sql2 = "SELECT * FROM profesionistas WHERE validacion_correo_p='1' AND validacion_documentos_p='1'";
	$query = mysqli_query($con, $sql);
	$query2 = mysqli_query($con, $sql2);
	if ($query || $query2) {
			while ($fila=mysqli_fetch_array($query)) {
				if ($fila['correo_e']!="admin") {
		?>
			<tr class="text-center">
				<td><?php echo $fila['correo_e'];?></td>
				<td><?php echo $fila['nombres_e'];?></td>
				<td><?php echo $fila['apellidoP_e'];?></td>
				<td><?php echo $fila['apellidoM_e'];?></td>
				<td>Empresa/Contratador</td>
				<td><?php if ($fila['plan_contratado_e']=="0") {
					 	echo "<p style='color: blue;'><b>Plan Gratuito</b></p>";
					}else if ($fila['plan_contratado_e']=="1") {
			 			echo "<p style='color: green;'><b>Plan Litte</b></p>";
					}else if ($fila['plan_contratado_e']=="2") {
					 	echo "<p style='color: red;'><b>Plan Basico</b></p>";
					}else if ($fila['plan_contratado_e']=="3") {
				 		echo "<p style='color: #FFD700;'><b>Plan Premium</b></p>";
					}?> </td>
				<td>
				  	<div class="progress">
					  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
					</div>
				</td>
				<td>
					<button class="btn btn-success" onclick="revision_documentos('<?php echo $fila['correo_e'];?>', 1, '<?php echo $fila['plan_contratado_e'];?>')">Revisar</button>
				</td>
			</tr>
		<?php
				}
			}
			while ($profesionistas= mysqli_fetch_array($query2)) {
				?>
				<tr class="text-center">
				<td><?php echo $profesionistas['correo_p'];?></td>
				<td><?php echo $profesionistas['nombres_p']; ?></td>
				<td><?php echo $profesionistas['apellidoP_p'];?></td>
				<td><?php echo $profesionistas['apellidoM_p'];?></td>
				 <td>Profesionista</td>
				 <td><?php
				 if ($profesionistas['plan_contratado_p']=="0") {
				 	echo "<p style='color: blue;'><b>Plan Gratuito</b></p>";
				 }else if ($profesionistas['plan_contratado_p']=="1") {
				 	echo "<p style='color: green;'><b>Plan Litte</b></p>";
				 }else if ($profesionistas['plan_contratado_p']=="2") {
				 	echo "<p style='color: red;'><b>Plan Basico</b></p>";
				 }else if ($profesionistas['plan_contratado_p']=="3") {
				 	echo "<p style='color: #FFF000;'><b>Plan Premium</b></p>";
				 }
				 ?> </td>
				 <td>
				  	<div class="progress">
					  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
					</div>
				</td>	
				<td>
					<button class="btn btn-success" onclick="revision_documentos('<?php echo $profesionistas['correo_p'];?>', 0, '<?php echo $profesionistas['plan_contratado_p'];?>')">Revisar</button>
				</td
			</tr>
			<?php 
			}
	}else{
		echo "No hay datos.";
	}
?>