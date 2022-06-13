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
	<div class="container">
		<div class="login-form">
			<div class="form-header">
				<img src="img/user.png" class="img-thumbnail" width="100px">
				<form method="POST">
					<div class="container-fluid">
		          	
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
		$('#submit_btn').click(function(){
			if($('#name').val()=="" || $('#name2').val()=="" || $('#name3').val()=="" || $('#apellido_p').val()=="" || $('#apellido_m').val()=="" || $('#email').val()=="" || $('#pass').val()==""|| $('#passc').val()=="" || $('#tipo_usuario').val()==""){
				$('#liveToast').toast('show');
			}else{
				if ($('#password').val() != $('#confirm_password').val()) {
					$('#contrasenas').toast('show');
				}else{
					var cadena = "primer_nombre="+$('#name').val()+
					"&segundo_nombre="+$('#name2').val()+
					"&tercer_nombre="+$('#name3').val()+
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
						 	$.ajax({
								url: 'enviar.php',
								type: 'POST',
								data: "correo="+$('#email').val()+"&nombre="+$('#name').val(),
							})
							.done(function(r) {
								if (r==1) {
									console.log("Todo correcto");
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