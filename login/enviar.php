<?php
require_once "Cl/DBclass.php";
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmiler/src/Exception.php';
require '../phpmiler/src/PHPMailer.php';
require '../phpmiler/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$num_confirmacion = rand(100000,999999);
$sql ="UPDATE usuarios SET validacion_correo='$num_confirmacion' WHERE correo='$correo'";
$query = mysqli_query($con, $sql);
$ruta1 = "http://localhost/Clicciona/login/check_account.php?c=$correo&num=$num_confirmacion";
if ($query) {
 try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'kike.ramos.resendiz@gmail.com';                     //SMTP username
    $mail->Password   = 'bgvbiwkjbseiuxzq';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('kike.ramos.resendiz@gmail.com', 'Clicciona');
    $mail->addAddress($correo, 'Enrique');     //Add a recipient              
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Confirmacion de cuenta';
    $mail->Body    = "Hola $nombre.<br>
    Gracias por crear una cuenta con Clicciona, verifica tu cuenta dando click en el siguiente enlace:<a href='$ruta1'>$num_confirmacion</a>";
    $mail->send();
    echo '1';
} catch (Exception $e) {
    echo "0";
}   
}else{
    echo "2";
}