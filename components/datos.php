<?php 
session_start();
if (isset($_SESSION['plan']) || isset($_SESSION['tipo']) || isset($_SESSION['profesion'])) {
	if (isset($_SESSION['profesion'])) {
		$profesion = $_SESSION['profesion'];
	}
	if (isset($_SESSION['tipo'])) {
		$tipo = $_SESSION['tipo'];
	}
	if (isset($_SESSION['plan'])) {
		$plan = $_SESSION['plan'];
	}
	if ($_SESSION['tipo']=="") {
			if ($_SESSION['plan']=="") { 
				$sql="SELECT * FROM empresas WHERE validacion_correo_e='1' AND validacion_documentos_e='1'";
				$sql2 = "SELECT * FROM profesionistas WHERE validacion_correo_p='1' AND validacion_documentos_p='1'";
				plan($sql, $sql2);
			}else {
				$sql="SELECT * FROM empresas WHERE validacion_correo_e='1' AND validacion_documentos_e='1' AND plan_contratado_e='$plan'";
				$sql2 = "SELECT * FROM profesionistas WHERE validacion_correo_p='1' AND validacion_documentos_p='1' AND plan_contratado_p='$plan'";
				plan($sql, $sql2);
			}
	}else if ($_SESSION['tipo']=="1") { 
			if ($_SESSION['plan']=="") {
				$sql="SELECT * FROM empresas WHERE validacion_correo_e='1' AND validacion_documentos_e='1'";
				tipo_empresas($sql);
			}else {
				$sql="SELECT * FROM empresas WHERE validacion_correo_e='1' AND validacion_documentos_e='1' AND plan_contratado_e='$plan'";
				tipo_empresas($sql);
			} 

	}else if ($_SESSION['tipo']=="0"){
		if ($_SESSION['plan']=="") {
			if ($_SESSION['profesion']!="null") {
				$sql = "SELECT * FROM profesionistas WHERE validacion_correo_p='1' AND validacion_documentos_p='1' AND id_profesion='$profesion'";
				tipo_profesionistas($sql);
			}else{
				$sql = "SELECT * FROM profesionistas WHERE validacion_correo_p='1' AND validacion_documentos_p='1'";
				tipo_profesionistas($sql);
			}
		}else {
			if ($_SESSION['profesion']!="null") {
				$sql = "SELECT * FROM profesionistas WHERE validacion_correo_p='1' AND validacion_documentos_p='1' AND plan_contratado_p='$plan' AND id_profesion='$profesion'";
				tipo_profesionistas($sql);
			}else{
				$sql = "SELECT * FROM profesionistas WHERE validacion_correo_p='1' AND validacion_documentos_p='1' AND plan_contratado_p='$plan'";
				tipo_profesionistas($sql);
			}
		}
	}
}
else{
	$sql="SELECT * FROM empresas WHERE validacion_correo_e='1' AND validacion_documentos_e='1'";
	$sql2 = "SELECT * FROM profesionistas WHERE validacion_correo_p='1' AND validacion_documentos_p='1'";
	plan($sql, $sql2);
}
function plan($sql,$sql2){
	require_once "../login/Cl/DBclass.php";
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
					<button class="btn btn-success" onclick="revision_documentos('<?php echo $fila['correo_e'];?>', 1, '0')">Revisar</button>
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
					<button class="btn btn-success" onclick="revision_documentos('<?php echo $profesionistas['correo_p'];?>', 0, '0')">Revisar</button>
				</td
			</tr>
			<?php 
			}
	}else{
		echo "No hay datos.";
	}
}
function tipo_empresas($sql){
	require_once "../login/Cl/DBclass.php";
	$query = mysqli_query($con, $sql);
	if ($query) {
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
	}else{
		echo "No hay datos.";
	}
}
function tipo_profesionistas($sql){
	require_once "../login/Cl/DBclass.php";
	$query2 = mysqli_query($con, $sql);
	if ($query2) {
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
}
?>