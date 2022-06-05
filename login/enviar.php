<?php 
	$to = "karen_re@tesch.edu.mx";
    $subject = "Password Update Request";
    $mailContent = 'Holis';
                //set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "rn";
                $headers .= "Content-type:text/html;charset=UTF-8" . "rn";
                //additional headers
                $headers .= 'From: Tu<[email protected]>' . "rn";
                //send email
                mail('karen_re@tesch.edu.mx','Titulo',$mailContent);
                
                $sessData['status']['type'] = 'success';
                $sessData['status']['msg'] = 'Please check your e-mail, we have sent a password reset link to your registered email.';