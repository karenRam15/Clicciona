<?php 
session_start();
if (isset($_SESSION['user_type_document'])) {
	if ($_SESSION['user_type_document']=="1") {
		?>
		<div class="row">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Nombre de la empresa" id="nombre_empresa" name="nombre_empresa">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Primer nombre del titutar" id="primer_nombre_encargado" name="primer_nombre_encargado">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Segundo nombre del titutar(Opcional)" id="segundo_nombre_encargado" name="segundo_nombre_encargado">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Tercer nombre del titutar(Opcional)" id="tercer_nombre_encargado" name="tercer_nombre_encargado">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Apellido Paterno del titutar" id="apellido_p_encargado" name="apellido_p_encargado">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Apellido Materno del titutar" id="apellido_m_encargado" name="apellido_m_encargado">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Correo de contacto" id="correo_empresa" name="correo_empresa">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Contraseña" id="password" name="password">
			<input type="text" class="form-control placeholder-no-fix col-lg-12" placeholder="Confirmar contraseña" id="confirm_password" name="confirm_password">
		</div>
		<?php 
	}else if ($_SESSION['user_type_document']=="0") {
		?>
		<div class="row">
		    <input type="file" class="form-control placeholder-no-fix col-lg-12" id="imagen_register" name="imagen_register">
		    <input type="text" class="form-control placeholder-no-fix col-lg-12" id="name_register" name="name_register" placeholder="Nombre">
		    <input type="text" class="form-control placeholder-no-fix col-lg-12" id="name2_register" name="name2_register" placeholder="Segundo Nombre">
		    <input type="text" class="form-control placeholder-no-fix col-lg-12" id="name3_register" name="name3_register" placeholder=" Tercer Nombre">
		    <input type="text" class="form-control placeholder-no-fix col-lg-12" id="apellido_p_register" name="apellido_p_register" placeholder="Apellido paterno">
		    <input type="text" class="form-control placeholder-no-fix col-lg-12" id="apellido_m_register" name="apellido_m_register" placeholder="Apellido materno">
		    <input type="email" id="email_register" name="email_register" class="form-control placeholder-no-fix col-lg-12" placeholder="Correo">
		    <input type="password" id="password_register" name="password_register" class="form-control placeholder-no-fix col-lg-12" placeholder="Contraseña" maxlength="8">
		    <input type="password" class="form-control placeholder-no-fix col-lg-12" id="confirm_password_register" name="confirm_password_register" placeholder="Confirmar contraseña" maxlength="8">
		</div>
		<?php 
	}
}else{
	echo "No hay sesion";
}
?>