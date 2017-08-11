 <?php 
include('header.php');


include ("../class/crud.php");

$cc=new crud();
if(isset($_POST['submit'])){
	
	// upload method //
	
	
						$target_dir = "../images/";
						@$file_name =basename($_FILES["fileToUpload"]["name"]);
						@$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
						$uploadOk = 1;
						$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
						// Check if image file is a actual image or fake image
						//if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
							
						
						// Check if file already exists
						/*
						if (file_exists($target_file)) {
							echo "Sorry, file already exists.";
							$uploadOk = 0;
						}
						*/
						// Check file size
						if ($_FILES["fileToUpload"]["size"] > 500000) {
							echo "Sorry, your file is too large.";
							$uploadOk = 0;
						}
						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {
							echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
							$uploadOk = 0;
						}
						
						

	
	
	
	//    ///
	$nom=$_POST['NOM'];
	$prix=$_POST['PRIX'];
	$mail=$_POST['MAIL'];
	$desc=$_POST['DESC'];
	$image=$file_name;
	$verify=$cc->recuperernomlivreur($nom,$cc->conn);
	$nombre=$verify[0];
	
$verifmail="!^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$!";

	
	if($nombre[0]>0 || !preg_match($verifmail,$mail) || $prix>100000 || $prix<0  )
	{

	echo 'erreurrrrrr';
	
	}
	else {
	
	$livreur=new livreur($nom,$prix,$mail,$image);
	$cc->insertlivreur($livreur,$desc,$cc->conn);
	echo"insertion effectuee avec succes";
	}
	?>
		<form action="afficherlivreur.php" method="post" >

<input type="submit" name="submit" value="liste des livreurs" class="btn btn-danger" />
</form>
	
<?php
}
else{
?>
			<form method="post" action="addlivreur.php" enctype="multipart/form-data">
			
  <div class="form-group">
    <label>NAME </label>
    <input name="NOM" type="text" class="form-control"  placeholder=" Enter NAME" required>
  </div>
    <div class="form-group">
    <label>PRICE</label>
    <input name="PRIX" type="text" class="form-control"  placeholder=" Enter PRICE" required>
  </div>
  <div class="form-group">
    <label>MAIL</label>
    <input name="MAIL" type="text" class="form-control"  placeholder=" Enter MAIL" required>
  </div>
  <div class="form-group">
    <label>DESCRIPTION</label>
    <input name="DESC" type="text" class="form-control"  placeholder=" Enter DESCRIPTION" required>
  </div>
  
   <div class="form-group">
    <label>UPLOAD IMAGE</label>
	<input type="file" name="fileToUpload" id="fileToUpload" >
  </div>
  
  <div>
  <input name="submit" type="submit" class="btn btn-danger" value="Submit"/>
  <a href="index.php" class="btn btn-danger">Cancel</a>
  <br>
  </div>
</form>


<?php 
}
include('footer.php');

?>  
