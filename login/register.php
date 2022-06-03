<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de registro de usuarios</title>

    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </head>
  <body>
	<div class="toast-container position-fixed bottom-0 end-0 p-3">
		<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
			<div class="toast-header">
			<strong class="me-auto">Clicciona</strong>
			<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
			<div class="toast-body">
			Ingresa todos los datos.
			</div>
		</div>
	</div>
	<div class="toast-container position-fixed bottom-0 end-0 p-3">
		<div id="contrasenas" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
			<div class="toast-header">
			<strong class="me-auto">Clicciona</strong>
			<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
			<div class="toast-body">
			Las contraseñas no coinciden.
			</div>
		</div>
	</div>
	<div class="toast-container position-fixed bottom-0 end-0 p-3">
		<div id="user_succes" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
			<div class="toast-header">
			<strong class="me-auto">Clicciona</strong>
			<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
			<div class="toast-body">
			Usuario registrado.
			</div>
		</div>
	</div>
	<div class="toast-container position-fixed bottom-0 end-0 p-3">
		<div id="user_failed" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
			<div class="toast-header">
			<strong class="me-auto">Clicciona</strong>
			<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
			<div class="toast-body">
			Usuario no registrado.
			</div>
		</div>
	</div>
	<div class="toast-container position-fixed bottom-0 end-0 p-3">
		<div id="user_register" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
			<div class="toast-header">
			<strong class="me-auto">Clicciona</strong>
			<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
			<div class="toast-body">
			El correo ya esta registrado
			</div>
		</div>
	</div>
	<div class="container">
		<div class="login-form">
			<div class="form-header">
				<img src="img/user.png" class="img-thumbnail" width="100px">
				<form method="POST">
					<div class="container-fluid">
		          	<div class="row">
			            <div class="col-lg-12">
			              <div class="form-floating mb-3">
			                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
			                  <label for="floatingInput">Nombre</label>
			              </div> 
			            </div>
						<div class="col-lg-12">
			              <div class="form-floating mb-3">
			                <input type="text" class="form-control" id="apellido_p" name="apellido_p" placeholder="Apellido paterno">
			                  <label for="floatingInput">Apellido paterno</label>
			              </div> 
			            </div>
						<div class="col-lg-12">
			              <div class="form-floating mb-3">
			                <input type="text" class="form-control" id="apellido_m" name="apellido_m" placeholder="Apellido materno">
			                  <label for="floatingInput">Apellido materno</label>
			              </div> 
			            </div>
						<div class="col-lg-12">
			              <div class="form-floating mb-3">
			                <input type="email" class="form-control" id="email" name="email" placeholder="Correo">
			                  <label for="floatingInput">Correo</label>
			              </div> 
			            </div>
						<div class="col-lg-12">
			              <div class="form-floating mb-3">
			                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" maxlength="8">
			                  <label for="floatingInput">Contraseña</label>
			              </div> 
			            </div>
						<div class="col-lg-12">
			              <div class="form-floating mb-3">
			                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar contraseña" maxlength="8">
			                  <label for="floatingInput">Confirmar contraseña</label>
			              </div> 
			            </div>
						<div class="col-lg-12">
							<div class="form-floating mb-3">
								<select class="form-select" id="tipo_usuario" name="tipo_usuario" aria-label="Floating label select example">
									<option value="">Elige el tipo de usuario</option>
									<option value="0">Egresados</option> 
									<option value="1">Contratante</option>
								</select>
								<label for="floatingSelect">Tipo de usuario</label>
							</div>
						</div>
		        	</div>
					</div>
		       	</form>
		       	<div class="container">
		       		<div class="row">
		       			<div class="col-lg-4"></div>
						<div class="col-lg-4">
						<button class="btn btn-block bt-login" id="submit_btn" name="submit_btn">Registrarse</button>
						</div>
						<div class="col-lg-4"></div>	
		       		</div>
		       	</div>
	       	</div>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="forget_password.php">¿Olvidaste tu contraseña? </a>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-check"></i>
						<a href="index.php">Iniciar sesión</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var apellido_p = $('#apellido_p').val();
		var apellido_m = $('#apellido_m').val();
		var email = $('#email').val();
		var pass = $('#password').val();
		var passc = $('#confirm_password').val();
		var tipo_usuario = $('#tipo_usuario').val();
		$('#submit_btn').click(function(){
			if($('#name').val()=="" || $('#apellido_p').val()=="" || $('#apellido_m').val()=="" || $('#email').val()=="" || $('#pass').val()==""|| $('#passc').val()=="" || $('#tipo_usuario').val()==""){
				$('#liveToast').toast('show');
			}else{
				if ($('#password').val() != $('#confirm_password').val()) {
					$('#contrasenas').toast('show');
				}else{
					var cadena = "nombre="+$('#name').val()+
					"&apellido_p="+$('#apellido_p').val()+
					"&apellido_m="+$('#apellido_m').val()+
					"&email="+$('#email').val()+
					"&pass="+$('#password').val()+
					"&tipo_usuario="+$('#tipo_usuario').val();
					$.ajax({
						url: 'insert_user.php',
						type: 'POST',
						data: cadena,
					})
					.done(function(r) {
						 if (r==1) {
						 	$('#user_succes').toast('show');
						 }else if (r==2) {
						 	$('#user_register').toast('show');
						 }else{
						 	$('#user_failed').toast('show');
						 }
					})
					.fail(function(r) {
						console.log(r);
					});
				}
			}
		});
	</script>
  </body>
</html>