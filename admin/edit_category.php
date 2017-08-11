
 <?php 
include('header.php');
include ("../class/crud.php");
include ("../class/category.php");

$cc=new crud();

$id= $_GET['id'];


$book=$cc->rechercheCategory($cc->conn,$id);


// run query 



if(isset($_POST['submit1'])){
	
	
	$category=$_POST['category'];

	
	$cat=new category($category);


	
	
		
		
	if($cc->updateCategory($cat,$id,$cc->conn)){
			echo '<script language="Javascript">
			
				document.location.replace("category.php?msg= successfully updated ");
				
			</script>';
		//header("Location: books.php?msg=dellaa");
			
		}
	
	
}


?>


 <h1 class="page-header">
                            Product Management <small>: Category</small>
							
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / Product / <a href="category.php"> Category </a>
								
                            </li>
                        </ol>


			<form method="post" action="edit_category.php?id=<?php echo $id; ?>" id="tryitForm" name="myForm">
			
  <div class="form-group">
  <?php foreach ($book as $b){ ?>
							
						
    <label>Category</label>
    <input name="category" type="text" class="form-control" id="category"  placeholder=" Enter Title" value="<?php echo $b['name'];?> ">
  </div>
 
 
  <?php } ?>
  <div>
  <input name="submit1" type="submit" class="btn btn-primary" value="Update"/>
  <a href="category.php" class="btn btn-default">Cancel</a>
  
  </div>
  <br>
</form>





  <?php 
include('footer.php');

?>  