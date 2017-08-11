<?PHP
include('header.php');

include ("../class/crud.php");
$cc=new crud();


if (isset($_POST['enregistrerModif'])){
    $nom=$_POST['nom'];
	$prix=$_POST['prix'];
	$logo=$_POST['logo'];
	$description=$_POST['description'];
	$mail=$_POST['mail'];
	$cc->modifierlivreur($nom,$prix,$logo,$description,$mail,$cc->conn);
	echo"modification effectuee avec succes"
	?>
	<form action="afficherlivreur.php" method="post" >

<input type="submit" name="submit" value="liste des livreurs" class="btn btn-danger" />
</form>
<?php

}else{
$id=$_GET['id'];


$livreur=$cc->recupererlivreur($id,$cc->conn);


?>
<form method="POST">
<table>
<?PHP foreach ($livreur as $l){ ?>
<tr>
<td>Nom <input disabled type="text" name="nom" value="<?PHP echo $l['nom'];  ?>"></td>
<td><input hidden type="text" name="nom" value="<?PHP echo $l['nom'];  ?>"></td>
<td>Prix <input type="text" name="prix" value="<?PHP echo $l['prix'];  ?>"></td>
<td>logo <input type="text" name="logo" value="<?PHP echo $l['logo'];  ?>"></td>
<td>mail <input type="text" name="mail" value="<?PHP echo $l['mail'];  ?>"></td>
<td>description <input type="text" name="description" value="<?PHP echo $l['description'];  ?>"></td>
</tr>
<tr>

<td><input type="submit" value="enregistrer" name="enregistrerModif" class="btn btn-danger"> </td>

</tr>
<?PHP } ?>
</table>
</form>
<?PHP }
include('footer.php');

 ?>