<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Olvidé mi contraseña</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
  </head>
  <body>
	<div class="container">
		<div class="login-form">
			<div class="form-header">
			<!--<img src="../img/cliccionaIcon.png" width="70" height="70" alt="icon">-->
			</div>
			<form id="forgetpassword-form" method="POST" class="form-register" role="form">
				<div>
					<input id="email" name="email" type="email" class="form-control" placeholder="Correo electrónico">  
					<span class="help-block"></span>
				</div>
				<button class="btn btn-block bt-login" id="submit_btn">Restablecer Contraseña</button>
			</form>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="index.php">  Iniciar sesión  </a>
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-check"></i>
						<a href="register.php"> Registrarse </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/forgetpassword.js"></script>
    <script type="text/javascript">
    	 $('#submit_btn').click(function(){
    	 	$.ajax({
    	 		url: 'correo_recuperacion_cuenta.php',
    	 		type: 'POST',
    	 		data: "correo="+$('#email').val(),
    	 	})
    	 	.done(function(r) {
    	 		if (r==1) {
    	 			console.log("Correo enviado");
    	 		}else if (r==5) {
    	 			alert("Correo no registrado");
    	 		}else{
    	 			console.log("Correo no enviado");
    	 		}
    	 	})
    	 	.fail(function() {
    	 		console.log("error");
    	 	})
    	 	.always(function() {
    	 		console.log("complete");
    	 	});
    	 	
    	 });
    </script>
  </body>
</html>