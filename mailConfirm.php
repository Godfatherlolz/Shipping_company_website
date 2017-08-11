<?php
require 'phpmailer/PHPMailerAutoload.php';

if(!isset($_SESSION)) 
    { 
        session_start(); 

    } 

function sendMail($name,$maill,$message)
{
    $url=$_SERVER['HTTP_REFERER'];
    $mail = new PHPMailer;
    $msg = wordwrap($message,70);
    $mail->Debugoutput = 'html';
    // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'kouertani270@gmail.com';                 // SMTP username
    $mail->Password = 'Groovestreet2';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->From = $maill;
    $sujet=$name;
     
    $mail->addAddress($maill);               // Name is optional
    $mail->Subject = $sujet;
    //$mail->Body    = ;
$message='
<html>
    <body>
        <div align="center">
            <a href="http://localhost/front/confirmation.php?email='.urlencode($_SESSION['mail']).'&key='.$_SESSION['key'].'"   > Confirm your account    </a>
        </div>
    </body>
</html>
';
   
  $mail->MsgHTML(
$message
);
	
    if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}

//if(isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['msg']))

   
  
                                


$url=$_SERVER['HTTP_REFERER'];
//header('location:'.$url);?>