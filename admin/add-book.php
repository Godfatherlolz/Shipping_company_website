<?php 
include('header.php');
include ("../class/crud.php");
include ("../class/produit.php");

$cc=new crud();

	if(isset($_FILES["image_upload"]["name"]))  
 {  					
  $name = $_FILES["image_upload"]["name"];  
      $size = $_FILES["image_upload"]["size"];  
      $ext = end(explode(".", $name));  
      $allowed_ext = array("png", "jpg", "jpeg");  
      if(in_array($ext, $allowed_ext))  
      {  
           if($size < (1024 * 8192))  
           {  
                $new_image = '';  
                $new_name = md5(rand()) . '.' . $ext;  
                $path = '../images/books/' . $new_name;  
                list($width, $height) = getimagesize($_FILES["image_upload"]["tmp_name"]);  
                if($ext == 'png')  
                {  
                     $new_image = imagecreatefrompng($_FILES["image_upload"]["tmp_name"]);  
                }  
                if($ext == 'jpg' || $ext == 'jpeg')  
                {  
                     $new_image = imagecreatefromjpeg($_FILES["image_upload"]["tmp_name"]);  
                }  
                $new_width = 400;  
                $new_height = 530;  
                $tmp_image = imagecreatetruecolor($new_width, $new_height);  
                imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);  
                imagejpeg($tmp_image, $path, 100);  
                imagedestroy($new_image);  
                imagedestroy($tmp_image);  
              //  echo '<img src="'.$path.'" />';  
           }  
           else  
           {  
                echo 'Image File size must be less than 1 MB';  
           }  
      }  
      else  
      {  
           echo 'Invalid Image File';  
      } 	
	
	
 }
 
 

if(isset($_POST['submit1'])){
	
	$title=htmlentities($_POST['title']);
	$author=$_POST['author'];
	$description=htmlentities($_POST['description']);
  $summary=htmlentities($_POST['summary']);
	$category=$_POST['category'];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];
	
	if($new_name== ''){
    $new_name = 'No_Image_Available.png';
  }
	// upload method //
	

	
	
	if($title=='' || $author=='' || $description=='' || $category=='' || $price=='' || $quantity=='' ){
		$error="please fill the blanks";
		
	}else{

		/*$query= " insert into product (title,author,description,price,categoryID,quantity,image,summary) 
		values('$title', '$author', '$description' , $price, $category,'$quantity','$new_name','$summary')";*/
		
		$prod=new produit($title,$author,$description,$price,$category,$quantity,$new_name,$summary);
//$cc->conn->query($query
		if($cc->insertProduit($prod,$cc->conn)){
			echo '<script language="Javascript">
			
				document.location.replace("books.php?msg=You successfully add this book");
				
			</script>';
		//header("Location: books.php?msg=dellaa");
			
		}
		
	}
	
}

$category=$cc->afficheCategory($cc->conn);
$authoor=$cc->afficheAuthor($cc->conn);


?>  


			 <h1 class="page-header">
                            Product Management <small>: Add book</small>
							
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-book" aria-hidden="true"></i> <a href="index.php">dashboard</a> / Product / <a href="books.php">books </a> / add-book
								
                            </li>
                        </ol>
				 
<form method="post" name="myForm" action="add-book.php" enctype="multipart/form-data" id="tryitForm" class="form-horizontal"  >
			
  <div class="form-group">
    <label>Book Title</label>
    <input name="title" type="text" class="form-control"  placeholder=" Enter Title" id="title" required >
     
  </div>
     <div class="form-group">
     <label>Book Author</label>  
   <a href="author.php" target=_blank>    <i class="fa fa-plus fa-4 " aria-hidden="true"></i> </a>   
  <select name="author" class="form-control"  > 


      <?php

            foreach ($authoor as $auth){
          ?>
      
        <option name="author"  value="<?php echo $auth['id'];?>"><?php echo $auth['name'];?></option>

      <?php
          }
          ?>

</select>

   </div> 
   <div class="form-group">
     <label>Book Category</label>  
   <a href="category.php" target=_blank>    <i class="fa fa-plus fa-4 " aria-hidden="true"></i> </a>   
  <select name="category" class="form-control" > 


      <?php

            foreach ($category as $cat){
          ?>
      
        <option name="category" selected value="<?php echo $cat['id'];?>"><?php echo $cat['name'];?></option>

      <?php
          }
          ?>

</select>

   </div> 
    <div class="form-group">
    <label>Book Description</label>
    <textarea name="description" id="description"  class="form-control"  placeholder=" Enter description" required ></textarea>
  </div>
  <div class="form-group">
    <label>Book Summary</label>
    <textarea name="summary"  id="summary" class="form-control"  placeholder=" Enter Summary" required ></textarea>
  </div>
  
  
   
    <div class="form-group">
    <label>Book Price</label>
    <input name="price" id="price"  type="text" class="form-control"  placeholder=" Enter Price" required >
  </div>
  
    <div class="form-group">
    <label>Book Quantity</label>
    <input name="quantity" id="quantity" type="number" class="form-control"  placeholder=" Enter Quantity" required>
  </div>
  
    
                     <div class="form-group">  
                          <label>Select File <br />  
                               <input type="file" name="image_upload" id="image_upload" />  
                          </label>  
                     </div>  
                 
				
 <!--  <div class="form-group">
    <label>Upload Image</label>
	<input type="file" name="fileToUpload" id="fileToUpload">
  </div>-->
  
  <div>
  <input name="submit1" type="submit" class="btn btn-primary" value="Submit"/>
  <a href="books.php" class="btn btn-default">Cancel</a>
  <br>
  </div>
</form>
















<?php 
include('footer.php');

?>  