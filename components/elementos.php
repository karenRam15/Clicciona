<?php 
session_start();
?>
<form name="formulario_register" id="formulario_register" style="background-color: #E2E2E2;">
<?php 
if (isset($_SESSION['user_type_document'])) {
	if ($_SESSION['user_type_document']=="1") {
		?>
			<input type="file" class="form-control placeholder-no-fix col-lg-12" id="imagen_empresa" name="imagen_empresa">
			<input type="text" class="form-control" placeholder="Nombre de la empresa" id="nombre_empresa" name="nombre_empresa">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Primer nombre del titutar" id="primer_nombre_encargado" name="primer_nombre_encargado">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Segundo nombre del titutar(Opcional)" id="segundo_nombre_encargado" name="segundo_nombre_encargado">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Tercer nombre del titutar(Opcional)" id="tercer_nombre_encargado" name="tercer_nombre_encargado">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Apellido Paterno del titutar" id="apellido_p_encargado" name="apellido_p_encargado">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Apellido Materno del titutar" id="apellido_m_encargado" name="apellido_m_encargado">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Correo empresarial" id="correo_empresa" name="correo_empresa">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Contraseña" id="password_empresa" name="password_empresa">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Confirmar contraseña" id="confirm_password_empresa" name="confirm_password_empresa">
		<?php 
	}else if ($_SESSION['user_type_document']=="0") {
		?>
		<div class="row">
		    <input type="file" class="form-control placeholder-no-fix col-lg-12" id="imagen_profesionista" name="imagen_profesionista">
		    <input type="text" class="form-control placeholder-no-fix col-lg-12" id="carrera_profesionista" name="carrera_profesionista" placeholder="Carrera">
		    <input type="text" class="form-control placeholder-no-fix col-lg-12" id="primer_nombre_profesionista" name="primer_nombre_profesionista" placeholder="Nombre">
		    <input type="text" class="form-control placeholder-no-fix col-lg-12" id="segundo_nombre_profesionista" name="segundo_nombre_profesionista" placeholder="Segundo Nombre">
		    <input type="text" class="form-control placeholder-no-fix col-lg-12" id="tercer_nombre_profesionista" name="tercer_nombre_profesionista" placeholder=" Tercer Nombre">
		    <input type="text" class="form-control placeholder-no-fix col-lg-12" id="apellido_p_profesionista" name="apellido_p_profesionista" placeholder="Apellido paterno">
		    <input type="text" class="form-control placeholder-no-fix col-lg-12" id="apellido_m_profesionista" name="apellido_m_profesionista" placeholder="Apellido materno">
		    <input type="email" id="email_profesionista" name="email_profesionista" class="form-control placeholder-no-fix col-lg-12" placeholder="Correo">
		    <select name="estado_profesionista" class="form-control" id="estado_profesionista">
			    <option value="">Seleccione un estado</option>
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
			<input type="text" class="form-control" id="localidad_profesionista" name="localidad_profesionista" placeholder="Localidad">
		    <input type="password" id="password_profesionista" name="password_profesionista" class="form-control placeholder-no-fix col-lg-12" placeholder="Contraseña" maxlength="8">
		    <input type="password" class="form-control placeholder-no-fix col-lg-12" id="confirm_password_profesionista" name="confirm_password_profesionista" placeholder="Confirmar contraseña" maxlength="8">
		</div>
		<?php 
	}
}
?>
</form>
<button class="btn" id="btn_register" name="btn_register" style="background: #09052b; color: white;">Registrarse</button>
    <?php 
    if ($_SESSION['user_type_document']=="1") {
    ?>
    <script type="text/javascript">
	   	$('#btn_register').click(function(){
	        if($('#nombre_empresa').val()=="" ||  
		        $('#primer_nombre_encargado').val()=="" || 
		        $('#segundo_nombre_encargado').val()=="" ||
		        $('#tercer_nombre_encargado').val()=="" ||
		        $('#apellido_p_encargado').val()=="" || 
		        $('#apellido_m_encargado').val()=="" || 
		        $('#correo_empresa').val()=="" || 
		        $('#password_empresa').val()=="" ||
		        $('#confirm_password_empresa').val()==""){
		        Toastify({text: "Ingresa todos los datos.", duration: 5000}).showToast();
		    }else{
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
			                    $('#segundo_nombre_encargado').val(""); 
			                    $('#tercer_nombre_encargado').val(""); 
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
			}
		});
		</script>
   	<?php 
    }else if ($_SESSION['user_type_document']=="0"){
    ?>
    <script type="text/javascript">
		$('#btn_register').click(function(){
		    if($('#nombre_empresa').val()=="" ||
		    	$('#primer_nombre_profesionista').val()=="" ||
		        $('#apellido_p_profesionista').val()=="" || 
		        $('#apellido_m_profesionista').val()=="" || 
		        $('#email_profesionista').val()=="" || 
		        $('#password_profesionista').val()==""|| 
		        $('#confirm_password_profesionista').val()=="" || 
		        $('#estado_profesionista').val()==""||
		        $('#localidad_profesionista').val()==""||
		        $('#imagen_profesionista').val()==""){
		        Toastify({text: "Ingresa todos los datos.", duration: 5000}).showToast();
		    }else{
		        if ($('#password_register').val() != $('#confirm_password_register').val()) {
			    	Toastify({text: "Las contraseñas no coinciden", duration: 5000}).showToast();
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
				                    $('#nombre_empresa').val("");
				                    $('#primer_nombre_encargado').val("");
				                    $('#segundo_nombre_encargado').val("");
				                    $('#tercer_nombre_encargado').val("");  
				                    $('#apellido_p_encargado').val(""); 
				                    $('#apellido_m_encargado').val(""); 
				                    $('#correo_empresa').val(""); 
				                    $('#password_empresa').val(""); 
				                    $('#passc_register').val(""); 
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
			          }
			       }
		});
	</script>
	<?php 
    } 
    ?>
