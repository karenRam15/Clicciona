<?php 
require_once "Cl/DBclass.php";
$correo = $_POST['correo'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../phpmiler/src/Exception.php';
require '../phpmiler/src/PHPMailer.php';
require '../phpmiler/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$num_confirmacion = rand(100000,999999);
$sql3 = "SELECT * FROM usuarios WHERE correo = '$correo'";
$query= mysqli_query($con, $sql3);
if (mysqli_num_rows($query)>0) {
	$sql2 ="UPDATE usuarios SET reset_password='$num_confirmacion' WHERE correo='$correo'";
	$query2 = mysqli_query($con, $sql2);
	if ($query2) {
		$sql ="SELECT * FROM usuarios WHERE correo = '$correo'";
		$query = mysqli_query($con, $sql);
		if (mysqli_num_rows($query)>0) {
			while ($fila = mysqli_fetch_array($query)) {
				if ($fila['segundo_nombre']==""||$fila['segundo_nombre']==NULL) {
					$nombre = $fila['primer_nombre']." ".$fila['apellido_p']." ".$fila['apellido_m'];
				}else if ($fila['tercer_nombre']==""||$fila['tercer_nombre']==NULL) {
					$nombre = $fila['primer_nombre']." ".$fila['segundo_nombre']." ".$fila['apellido_p']." ".$fila['apellido_m'];
				}else{
					$nombre = $fila['primer_nombre']." ".$fila['segundo_nombre']." ".$fila['tercer_nombre']." ".$fila['apellido_p']." ".$fila['apellido_m'];
				}

				$ruta1 = "http://localhost/Clicciona/login/reset_password.php?c=$correo&n=$num_confirmacion";
				if ($query) {
				 try {
				    //Server settings
				    //$mail->SMTPDebug = true;                      //Enable verbose debug output
				    $mail->isSMTP();                                            //Send using SMTP
				    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
				    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
				    $mail->Username   = 'kike.ramos.resendiz@gmail.com';                     //SMTP username
				    $mail->Password   = 'bgvbiwkjbseiuxzq';                               //SMTP password
				    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
				    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

				    //Recipients
				    $mail->setFrom('kike.ramos.resendiz@gmail.com', 'Clicciona');
				    $mail->addAddress('hybridsh98sk@gmail.com', 'Clicciona'); 

				    //Content
				    $mail->isHTML(true);                                  //Set email format to HTML
				    $mail->Subject = 'Resetear contraseña - Clicciona';
				    $mail->Body    = "Hola $nombre.<br>
				    Es un placer informarte que podras acceder a tu cuenta en Clicciona dando click en el siguiente enlace:<a href='$ruta1'>Resetear contraseña</a>";
				    $mail->send();
				    echo '1';
				} catch (Exception $e) {
				    echo "0";
				}   
				}else{
				    echo "2";
				}
			}
		}
	}else{
		echo "5";
	}
}else{
	echo "5";
}