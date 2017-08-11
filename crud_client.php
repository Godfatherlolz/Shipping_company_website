<?php  


 include 'class/client.php';
 include_once ("class/config.php");
class crudClient{
	public $conn;

	function __construct()
	{ 
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	
	function insertClient($client,$conn){
		
		$req1="INSERT INTO client (email,mdp,Civ,societe,nom,prenom,pays,gouv,adresse,Ville,code_postal,telephone,tel_port,fax,cle) 
		VALUES ('".$client->getemail()."','".$client->getmdp().
		"','".$client->getciv()."','".$client->getsociete()."','".$client->getnom()."','".$client->getprenom()."','".$client->getpays()."','".$client->getgouv()."','".$client->getadresse()."','".$client->getville()."','".$client->getcode_postal()."','".$client->gettelephone()."','".$client->gettel_port()."','".$client->getfax()."','".$client->getkey()."')";
		if($conn->query($req1)){
			
		return true;
		}
	




	
}
}



?>
