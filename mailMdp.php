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
         <head>
           <title>Récupération de mot de passe  - Socotu.com.tn</title>
           <meta charset="utf-8" />
         </head>
         <body>
           <font color="#303030";>
             <div align="center">
               <table width="600px">
                 <tr>
                   <td>
                     
                     <div align="center">Bonjour <b>'.$_SESSION['nom'].'</b>,</div>
                     Voici votre code de récupération: <b>'.$_SESSION['recup_code'].'</b>
                     
A bientôt sur <a href="http://socotu.com.tn/">Socotu</a> !
                     
                   </td>
                 </tr>
                 <tr>
                   <td align="center">
                     <font size="2">
                       Ceci est un email automatique, merci de ne pas y répondre
                     </font>
                   </td>
                 </tr>
               </table>
             </div>
           </font>
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

   
  
                                





