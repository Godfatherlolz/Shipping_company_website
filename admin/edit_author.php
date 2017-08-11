
 <?php 
include('header.php');
include ("../class/crud.php");
include ("../class/author.php");

$cc=new crud();

$id= $_GET['id'];


$book=$cc->rechercheAuthoredit($cc->conn,$id);


// run query 



if(isset($_POST['submit1'])){
	
	
	$author=$_POST['author'];

	
	
	
		$auth=new author($author);


	
	
		
		
	if($cc->updateAuthor($auth,$id,$cc->conn)){
			echo '<script language="Javascript">
			
				document.location.replace("author.php?msg= successfully updated ");
				
			</script>';
		//header("Location: books.php?msg=dellaa");
			
		}
	
	
}


?>



                        <h1 class="page-header">
                            Product Management <small>: Author</small>
							
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / Product /<a href="author.php"> Author </a>
								
                            </li>
                        </ol>

			<form method="post" action="edit_author.php?id=<?php echo $id; ?>" id="tryitForm" name="myForm" >
			
  <div class="form-group">
  <?php foreach ($book as $b){ ?>
							
						
    <label>Author</label>
    <input name="author" type="text" class="form-control"  placeholder=" Enter Title" value="<?php echo $b['name'];?> ">
  </div>
 
 
  <?php } ?>
  <div>
  <input name="submit1" type="submit" class="btn btn-primary" value="Update"/>
  <a href="author.php" class="btn btn-default">Cancel</a>
  
  </div>
  <br>
</form>





  <?php 
include('footer.php');

?>  