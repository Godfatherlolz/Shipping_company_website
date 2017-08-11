<?php
include ("../class/crud.php");
$cc=new crud();


$id=$_GET['id'];
$cc->modifiercadeau($id,$cc->conn);
	header('location:affichercadeau.php');
		

?>