<?php 
require_once "Cl/DBclass.php";
if (isset($_GET['c'])&& $_GET['c']!=""&&isset($_GET['n'])&&$_GET['n']!="") {
	$correo = $_GET['c'];
	$num_confirmacion = $_GET['n'];
	$sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND reset_password='$num_confirmacion'";
	$query = mysqli_query($con, $sql);
	if (mysqli_num_rows($query)==0) {
		?>
		<script type="text/javascript">
			alert("Este token ya fue utilizado para reestablecer tu contraseña.");
			window.location = "../index.php";
		</script>
		<?php 
	}
}else{
	?>
		<script type="text/javascript">
			alert("No se pudo reestablecer tu contraseña.");
			window.location = "index.php";
		</script>
		<?php 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de recuperacion de contraseña</title>

    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  </head>
  <body>
	<div class="container">
		<div class="login-form">
			<div class="form-header">
				<img src="img/user.png" class="img-thumbnail" width="100px">
				<form method="POST">
					<div class="container-fluid">
		        <div class="row">
							<div class="col-lg-12">
			              <div class="form-floating mb-3">
			                <input type="email" class="form-control" id="email" name="email" placeholder="Correo" value="<?php echo $_GET['c'];?>" readonly>
			                  <label for="floatingInput">Correo</label>
			              </div> 
			            </div>
									<div class="col-lg-12">
			              <div class="form-floating mb-3">
			                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" maxlength="8">
			                  <label for="floatingInput">Ingresa tu nueva contraseña</label>
			              </div> 
			            </div>
									<div class="col-lg-12">
			              <div class="form-floating mb-3">
			                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar contraseña" maxlength="8">
			                  <label for="floatingInput">Confirmar contraseña</label>
			              </div> 
			            </div>
		        	</div>
					</div>
		       	</form>
		       	<div class="container">
		       		<div class="row">
		       			<div class="col-lg-2"></div>
						<div class="col-lg-8">
						<button class="btn btn-block bt-login" id="submit_btn" name="submit_btn">Restablecer contraseña</button>
						</div>
						<div class="col-lg-2"></div>	
		       		</div>
		       	</div>
	       	</div>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="register.php">Registrarse </a>
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
			if($('#email').val()=="" || $('#pass').val()==""|| $('#passc').val()==""){
				Toastify({text: "Los campos no deben estar vacios.", duration: 3000}).showToast();
			}else{
				if ($('#password').val() != $('#confirm_password').val()) {
					Toastify({text: "Las contraseñas no coinciden.", duration: 3000}).showToast();
				}else{
					var cadena = "email="+$('#email').val()+
					"&pass="+$('#password').val();
					$.ajax({
						url: 'update_password.php',
						type: 'POST',
						data: cadena,
					})
					.done(function(r) {
						 if (r==1) {
						 	Toastify({text: "La contraseña a sido actualizada exitosamente.", duration: 3000}).showToast();
						 	window.location="../index.php";
						 }else{
						 	Toastify({text: "Las contraseña no fue cambiada.", duration: 3000,style: {
    							background: "linear-gradient(to right, #00b09b, #96c93d)",
  						}}).showToast();
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