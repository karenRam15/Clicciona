<?php 
session_start();
require_once "../login/Cl/DBclass.php";
?>
<form name="formulario_register" class="form-group" id="formulario_register" style="background-color: #E2E2E2;">
	<div class="mb-2">
		<?php 
		if (isset($_SESSION['user_type_document'])) {
				if ($_SESSION['user_type_document']=="1") {
					?>
						<div class="mb-3">
						  <label for="imagen_empresa" class="form-label">Imagen de la Empresa</label>
						  <input class="form-control" type="file" id="imagen_empresa" name="imagen_empresa" accept="image/png,image/jpeg">
						</div>
						<div class="form-floating">
							<input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa" placeholder="Nombre de la empresa">
							<label for="nombre_empresa">Nombre de la Empresa</label>
						</div>
						<div class="form-floating">
							<input type="text" class="form-control" id="primer_nombre_encargado" name="primer_nombre_encargado" placeholder="Nombre(s)">
							<label for="floatingInput">Nombre(s) del Encargado</label>
						</div>
						<div class="form-floating">
							<input type="text" class="form-control" id="apellido_p_encargado" name="apellido_p_encargado" placeholder="Apellido Paterno del Encargado">
							<label for="floatingInput">Apellido Paterno del Encargado</label>
						</div>
						<div class="form-floating">
							<input type="text" class="form-control" id="apellido_m_encargado" name="apellido_m_encargado" placeholder="Apellido Materno del Encargado">
							<label for="floatingInput">Apellido Materno del Encargado</label>
						</div>
						<div class="form-floating">
							<input type="email" class="form-control" id="correo_empresa" name="correo_empresa" placeholder="Correo Empresarial">
							<label for="floatingInput">Correo Empresarial</label>
						</div>
						<div class="form-floating">
							<input type="password" class="form-control" id="password_empresa" name="password_empresa" placeholder="Contraseña">
							<label for="floatingInput">Contraseña</label>
						</div>
						<div class="form-floating">
							<input type="text" class="form-control" id="confirm_password_empresa" name="confirm_password_empresa" placeholder="Confirmacion de contraseña">
							<label for="floatingInput">Confirmación de contraseña</label>
						</div>
					<?php 
				}else if ($_SESSION['user_type_document']=="0") {
					?>
						<div class="mb-3">
						  <label for="imagen_empresa" class="form-label">Fotografia</label>
						  <input class="form-control" type="file" id="imagen_profesionista" name="imagen_profesionista" accept="image/png,image/jpeg">
						</div>
					  <div class="form-floating">
						    <select id="carrera_profesionista" name="carrera_profesionista" class="form-select" aria-label="Floating label select example">
						    	<option value="" disabled selected>Selecciona un Area de trabajo</option>
						    	<?php 
						    	$sql1 = "SELECT * FROM areas_profesiones";
						    	$query = mysqli_query($con, $sql1);
						    	if ($query) {
						    		while ($area = mysqli_fetch_array($query)) {
						    			?>
						    			<optgroup label="<?php echo $area['nombre_area']; ?>">
						    			<?php 
						    			$id_area = $area['id_area'];
						    			$sql2="SELECT * FROM profesiones WHERE id_area='$id_area'";
						    			$query2 = mysqli_query($con, $sql2);
						    				while ($profesion = mysqli_fetch_array($query2)){
						    		?>
						    			<option value="<?php echo $profesion['id_profesion']; ?>"><?php echo $profesion['nombre_profesion']; ?></option>
						    			<?php 
						    			}
						    		}
						    	}else{
						    		echo "Error";
						    	}
						    	?>
						    </select>
					      	<label for="floatingSelect">Carrera</label>
					      	<br>
						</div>
						<div class="form-floating">
							<input type="text" class="form-control" id="primer_nombre_profesionista" name="primer_nombre_profesionista" placeholder="Nombre(s)">
							<label for="primer_nombre_profesionista">Nombre(s)</label>
						</div>
						<div class="form-floating">
							<input type="text" class="form-control" id="apellido_p_profesionista" name="apellido_p_profesionista" placeholder="Apellido Paterno">
							<label for="apellido_p_profesionista">Apellido Paterno </label>
						</div>
						<div class="form-floating">
							<input type="text" class="form-control" id="apellido_m_profesionista" name="apellido_m_profesionista" placeholder="Apellido Materno">
							<label for="apellido_m_profesionista">Apellido Materno</label>
						</div>
						<div class="form-floating">
							<input type="email" class="form-control" id="email_profesionista" name="email_profesionista" placeholder="Correo Electronico">
							<label for="email_profesionista">Correo Electronico</label>
						</div>
					   	<div class="form-floating">
						    <select name="estado_profesionista" class="form-control" id="estado_profesionista">
							    <option value="" disabled selected>Seleccione un estado</option>
							    <option value="Aguascalientes">Aguascalientes</option>
							    <option value="Baja California">Baja California</option>
							    <option value="Baja California Sur">Baja California Sur</option>
							    <option value="Campeche">Campeche</option>
							    <option value="Chiapas">Chiapas</option>
							    <option value="Chihuahua">Chihuahua</option>
							    <option value="CDMX">Ciudad de México</option>
							    <option value="Coahuila">Coahuila</option>
							    <option value="Colima">Colima</option>
							    <option value="Durango">Durango</option>
							    <option value="México">Estado de México</option>
							    <option value="Guanajuato">Guanajuato</option>
							    <option value="Guerrero">Guerrero</option>
							    <option value="Hidalgo">Hidalgo</option>
							    <option value="Jalisco">Jalisco</option>
							    <option value="Michoacán">Michoacán</option>
							    <option value="Morelos">Morelos</option>
							    <option value="Nayarit">Nayarit</option>
							    <option value="Nuevo León">Nuevo León</option>
							    <option value="Oaxaca">Oaxaca</option>
							    <option value="Puebla">Puebla</option>
							    <option value="Querétaro">Querétaro</option>
							    <option value="Quintana Roo">Quintana Roo</option>
							    <option value="San Luis Potosí">San Luis Potosí</option>
							    <option value="Sinaloa">Sinaloa</option>
							    <option value="Sonora">Sonora</option>
							    <option value="Tabasco">Tabasco</option>
							    <option value="Tamaulipas">Tamaulipas</option>
							    <option value="Tlaxcala">Tlaxcala</option>
							    <option value="Veracruz">Veracruz</option>
							    <option value="Yucatán">Yucatán</option>
							    <option value="Zacatecas">Zacatecas</option>
							  </select>
					      	<label for="floatingSelect">Estado de Procedencia</label>
					      	<br>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="localidad_profesionista" name="localidad_profesionista" placeholder="Localidad">
							<label for="localidad_profesionista">Localidad</label>
						</div>
						<div class="form-floating">
							<input type="password" class="form-control" id="password_profesionista" name="password_profesionista" placeholder="Contraseña" maxlength="8" minlength="6">
							<label for="password_profesionista">Contraseña</label>
						</div>
						<div class="form-floating">
							<input type="email" class="form-control" id="confirm_password_profesionista" name="confirm_password_profesionista" placeholder="Confirmación de contraseña">
							<label for="confirm_password_profesionista">Confirmación de contraseña</label>
						</div>
					<?php 
				}
		}
		?>
	</div>
</form>
<button class="btn" id="btn_register" name="btn_register" style="background: #09052b; color: white;">Registrarse</button>
    <?php 
    if ($_SESSION['user_type_document']=="1") {
    ?>
    <script type="text/javascript">
	   	$('#btn_register').click(function(){
	      if($('#nombre_empresa').val()=="" ||  
		      	$('#primer_nombre_encargado').val()=="" || 
		      	$('#apellido_p_encargado').val()=="" || 
		      	$('#apellido_m_encargado').val()=="" || 
		    	  $('#correo_empresa').val()=="" || 
		  	    $('#password_empresa').val()=="" ||
		    	  $('#confirm_password_empresa').val()==""){
		      Toastify({text: "Ingresa todos los datos.", duration: 2000, gravity: "bottom", position: "right"}).showToast();
		    }else{
		    	var archivo = $("#imagen_empresa").val();
					var extensiones = archivo.substring(archivo.lastIndexOf("."));
		    	if(extensiones===".jpg" || extensiones===".png" || extensiones==="jpeg"){
		    		if ($('#password_empresa').val() == $('#confirm_password_empresa').val()) {
			        var Form = new FormData($('#formulario_register')[0]);
				      console.log(Form);
				      $.ajax({
				          url: 'login/insert_user.php',
				          type: 'POST',
				          data: Form,
				          processData: false,
				          contentType: false,
				      })
				      .done(function(r) {
				          if (r==1) {
				            $.ajax({
				      	      url: 'login/enviar.php',
				              type: 'POST',
				              data: "correo="+$('#correo_empresa').val()+"&nombre="+$('#primer_nombre_encargado').val(),
				            })
				            .done(function(r) {
				              if (r==1) {
				        	      Toastify({text:"Se envio un token a tu correo para confirmar tu correo.", duration: 5000}).showToast();
				                $('#nombre_empresa').val("");
				                $('#primer_nombre_encargado').val(""); 
				          	    $('#apellido_p_encargado').val(""); 
				                $('#apellido_m_encargado').val(""); 
				                $('#correo_empresa').val(""); 
				                $('#password_empresa').val(""); 
				                $('#confirm_password_empresa').val(""); 
				                cerrar_modal('#registrarse_modal');
				              }else if (r==2) {
				                console.log("Error al ingresar el numero");
				              }else if (r==0) {
				                console.log("Error al enviar el correo");
				              }else{
				                console.log("error");
				              }
				            })
				            .fail(function() {
				              console.log("error");
				            })
				            .always(function() {
				              console.log("complete");
				            });
				          }else if (r==2) {
				            Toastify({text: "El correo ya esta registrado.", duration: 5000}).showToast();
				          }else{
				            Toastify({text: "Error al registrar.", duration: 5000}).showToast();
				          }
				      })
				      .fail(function(r) {
				        console.log(r);
				      });
			   		}else{
			       	Toastify({text: "Las contraseñas no coinciden", duration: 5000}).showToast();
				   	}
					}else{
				   	Toastify({text: "La imagen debe tener el formato: .png, .jpg"+extensiones, duration: 2000,gravity: "bottom", position: "right", style: {background: "linear-gradient(to right, #00b09b, #96c93d)"}}).showToast();
					}
				}
			});
		</script>
   	<?php 
    }else if ($_SESSION['user_type_document']=="0"){
    ?>
    <script type="text/javascript">
		$('#btn_register').click(function(){
		  if($('#primer_nombre_profesionista').val()=="" ||
		    $('#apellido_p_profesionista').val()=="" || 
		    $('#apellido_m_profesionista').val()=="" || 
		    $('#email_profesionista').val()=="" || 
		    $('#password_profesionista').val()==""|| 
		    $('#confirm_password_profesionista').val()=="" || 
		    $('#estado_profesionista').val()==""||
		    $('#localidad_profesionista').val()==""||
		    $('#imagen_profesionista').val()==""){
		    Toastify({text: "Ingresa todos los datos.", duration: 2000, gravity: "bottom", position: "right"}).showToast();
		  }else{
		  	var archivo = $("#imagen_profesionista").val();
				var extensiones = archivo.substring(archivo.lastIndexOf("."));
		    if(extensiones===".jpg" || extensiones===".png" || extensiones==="jpeg"){
		     	if ($('#password_register').val() != $('#confirm_password_register').val()) {
				  	Toastify({text: "Las contraseñas no coinciden", duration: 2000, gravity: "bottom", position: "right"}).showToast();
				  }else{
				    var Form = new FormData($('#formulario_register')[0]);
				    $.ajax({
				      url: 'login/insert_user.php',
				      type: 'POST',
				      data: Form,
				      processData: false,
				      contentType: false,
				    })
				    .done(function(r) {
				     	if (r==1) {
				        $.ajax({
				          url: 'login/enviar.php',
				          type: 'POST',
				          data: "correo="+$('#email_profesionista').val()+"&nombre="+$('#primer_nombre_profesionista').val(),
				        })
				        .done(function(r) {
				          if (r==1) {
				            Toastify({text:"Se envio un token a tu correo para confirmar tu correo.", duration: 5000}).showToast();
				            $('#carrera_profesionista').val("");
										$('#primer_nombre_profesionista').val("");
						        $('#apellido_p_profesionista').val(""); 
						        $('#apellido_m_profesionista').val("");
						        $('#email_profesionista').val("");
						        $('#password_profesionista').val(""); 
						        $('#confirm_password_profesionista').val(""); 
						        $('#estado_profesionista').val("");
						        $('#localidad_profesionista').val("");
				            cerrar_modal('#registrarse_modal');
				          }else if (r==2) {
				            console.log("Error al ingresar el numero");
					        }else if (r==0) {
					          console.log("Error al enviar el correo");
					        }else{
					          console.log("error");
					        }
					      });
				      }else if (r==2) {
				        Toastify({text: "El correo ya esta registrado.", duration: 5000}).showToast();
				      }else{
				        Toastify({text: "Error al registrar.", duration: 5000}).showToast();
				      }
				   	})
				    .fail(function(r) {
				      console.log(r);
				    });
				  }
				}else{
				  Toastify({text: "La imagen debe tener el formato: .png, .jpg", duration: 2000, gravity: "bottom", position: "right", style: {background: "linear-gradient(to right, #00b09b, #96c93d)"}}).showToast();
				}
			}
		});
	</script>
	<?php 
    } 
    ?>
