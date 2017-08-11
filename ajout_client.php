
<meta charset="utf8">
<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 

    } 
 ?>
<?php

include ("class/crud.php");
include ("class/client.php");

include("mailConfirm.php");
$cc=new crud();
$ccc= new crud(); 


  
 

$password=password_hash($_POST['mdp'],PASSWORD_DEFAULT,['cost'=>12]);

$email=$_POST['email'];




$reqqq="select email from client where email like '$email' ";
$liste=$ccc->conn->query($reqqq);
$var=$liste->fetchAll();
foreach ($var as $v ) {

$emailText=$v[0];
	
}
if($email==$emailText){
	header('Location: register.php?type=error&message=Cet e-mail est déjà enregistré '); 
}


else{
$longeurKey= 12 ;
	$key="";

	for ($i=1; $i <$longeurKey ; $i++) { 
		

		$key.= mt_rand(0,9);
	}


$c1=new Client($email,$password,$_POST['Civ'],$_POST['societe'],$_POST['activite'],$_POST['nom'],$_POST['prenom'],$_POST['pays'], 
	$_POST['gouv'],$_POST['adresse'],$_POST['Ville'],$_POST['code_postal'],$_POST['telephone'],$_POST['tel_port'],$_POST['fax'],$key);	


$_SESSION['key']=$key;
$_SESSION['mail']=$email;
if ($cc->insertClient($c1,$cc->conn))

{



sendmail( "Confirmation de compte","$email", $message);









		
header('Location: index.php?type=success&message=Merci de confirmer votre adresse e-mail ! '); 
  
}
else{
	header('Location: register.php?type=warning&message=Please check all fields  and the captcha  '); 
}
}

	
	# code...







  


//header('location:interfaceAjout.html');

?>