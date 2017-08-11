
 <?php 


include ("../class/crud.php");
$id=$_GET['id'];

$cc=new crud();

$cc->supprimerlivreur($id,$cc->conn);
	header('location:afficherlivreur.php');	



?>