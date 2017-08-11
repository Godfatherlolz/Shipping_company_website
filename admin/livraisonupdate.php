<?php
include ("../class/crud.php");
$cc=new crud();


$id=$_GET['id'];
$cc->modifierlivraison($id,$cc->conn);
	header('location:afficherlivraison.php');
		

?>