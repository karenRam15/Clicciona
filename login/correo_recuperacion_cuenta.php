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
$sql3 = "SELECT * FROM empresas WHERE correo_e = '$correo'";
$sql4 = "SELECT * FROM profesionistas WHERE correo_p='$correo'";
$query= mysqli_query($con, $sql3);
$query2 = mysqli_query($con,$sql4);
if (mysqli_num_rows($query)>0) {
	$sql2 ="UPDATE empresas SET reset_pass_e='$num_confirmacion' WHERE correo_e='$correo'";
	$query2 = mysqli_query($con, $sql2);
	if ($query2) {
		$sql ="SELECT * FROM empresas WHERE correo_e = '$correo'";
		$query = mysqli_query($con, $sql);
		if (mysqli_num_rows($query)>0) {
			while ($fila = mysqli_fetch_array($query)) {
				if ($fila['segundo_nom_e']==""||$fila['segundo_nom_e']==NULL) {
					$nombre = $fila['primer_nom_e']." ".$fila['apellidoP_e']." ".$fila['apellidoM_e'];
				}else if ($fila['tercer_nom_e']==""||$fila['tercer_nom_e']==NULL) {
					$nombre = $fila['primer_nom_e']." ".$fila['segundo_nom_e']." ".$fila['apellidoP_e']." ".$fila['apellidoM_e'];
				}else{
					$nombre = $fila['primer_nom_e']." ".$fila['segundo_nom_e']." ".$fila['tercer_nom_e']." ".$fila['apellidoP_e']." ".$fila['apellidoM_e'];
				}
				$ruta1 = "http://localhost/Clicciona/login/reset_password.php?c=$correo&n=$num_confirmacion&tipo=1";
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
					    $mail->addAddress($correo, 'Clicciona'); 

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
	if (mysqli_num_rows($query2)>0) {
		$sql5 = "UPDATE profesionistas SET reset_pass_p='$num_confirmacion' WHERE correo_p='$correo'";
		$query3 = mysqli_query($con, $sql5);
		$sql6 = "SELECT * FROM profesionistas WHERE correo_p='$correo'";
		$query6 = mysqli_query($con, $sql6);
		if (mysqli_num_rows($query6)>0) {
			while ($fila = mysqli_fetch_array($query6)) {
				if ($fila['segundo_nom_p']==""||$fila['segundo_nom_p']==NULL) {
					$nombre = $fila['primer_nom_p']." ".$fila['apellidoP_p']." ".$fila['apellidoM_p'];
				}else if ($fila['tercer_nom_p']==""||$fila['tercer_nom_p']==NULL) {
					$nombre = $fila['primer_nom_p']." ".$fila['segundo_nom_p']." ".$fila['apellidoP_p']." ".$fila['apellidoM_p'];
				}else{
					$nombre = $fila['primer_nom_p']." ".$fila['segundo_nom_p']." ".$fila['tercer_nom_p']." ".$fila['apellidoP_p']." ".$fila['apellidoM_p'];
				}
				$ruta1 = "http://localhost/Clicciona/login/reset_password.php?c=$correo&n=$num_confirmacion&tipo=0";
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
					    $mail->addAddress($correo, 'Clicciona'); 

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
}