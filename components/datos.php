<?php 
session_start();
require_once "../login/Cl/DBclass.php";
$sql="SELECT * FROM usuarios WHERE tipo_usuario='0' OR tipo_usuario='1'";
	$query=mysqli_query($con, $sql);
	if ($query) {
			while ($fila=mysqli_fetch_array($query)) {
		?>
			<tr>
				<td><?php echo $fila['id_usuario'];?></td>
				<td><?php
					if ($fila['segundo_nombre']==NULL&&$fila['tercer_nombre']==NULL) {
						echo $fila['primer_nombre']." ".$fila['apellido_p']." ".$fila['apellido_m'];
					}else if ($fila['segundo_nombre']!=NULL&&$fila['tercer_nombre']==NULL) {
						echo $fila['primer_nombre']." ".$fila['segundo_nombre']." ".$fila['apellido_p']." ".$fila['apellido_m'];
					}else if ($fila['segundo_nombre']!=NULL&&$fila['tercer_nombre']!=NULL) {
						echo $fila['primer_nombre']." ".$fila['segundo_nombre']." ".$fila['tercer_nombre']." ".$fila['apellido_p']." ".$fila['apellido_m'];
					}
				 ?></td>
				 <td> <?php 
				 if ($fila['tipo_usuario']=="0") {
				 	echo "Profesionista";
				 }else{
				 	echo "Empresa/Contratador";
				 } ?> </td>
				 <td> <?php echo $fila['correo']; ?> </td>
			</tr>
		<?php 
			}
		}else{
			echo "No hay datos.";
		}
?>