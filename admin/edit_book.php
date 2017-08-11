
 <?php 
include('header.php');
include ("../class/crud.php");
include ("../class/produit.php");

$cc=new crud();

$id= $_GET['id'];


$book=$cc->rechercheProduit($cc->conn,$id);

$category = $cc->afficheCategory($cc->conn);
// run query 

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

?>

<?php

	





if(isset($_POST['submit1'])){
	
	$title=$_POST['title'];
	$author=$_POST['author'];
	$description=htmlentities($_POST['description']);
	$category=$_POST['category'];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];
	 $summary=htmlentities($_POST['summary']);

	
	
		if($new_name== ''){


			foreach ($book as $b){  $new_name = $b['image'];}

  }

  $prod=new produit($title,$author,$description,$price,$category,$quantity,$new_name,$summary);

	if($cc->updateProduit($cc->conn,$prod,$id)){
			echo '<script language="Javascript">
			
				document.location.replace("books.php?msg= successfully updated ");
				
			</script>';
		//header("Location: books.php?msg=dellaa");
			
		}
	
	
}
$authoor=$cc->afficheAuthor($cc->conn);

?>

<h1 class="page-header">
                            Product Management <small>: Edit book</small>
							
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-book" aria-hidden="true"></i> <a href="index.php">dashboard</a> / Product / <a href="books.php">books </a> / Edit-book
								
                            </li>
                        </ol>
                        <br>

			<form method="post" name="myForm" action="edit_book.php?id=<?php echo $id; ?> " enctype="multipart/form-data" id="tryitForm" class="form-horizontal" >
			
  <div class="form-group">
  <?php foreach ($book as $b){ ?>
							
						
    <label>Book Title</label>
    <input name="title" type="text" class="form-control"  placeholder=" Enter Title" value="<?php echo $b['title'];?> ">
  </div>
   
 
  <div class="form-group">
     <label>Book Author</label>
  <select name="author" class="form-control">
				<?php foreach ($authoor as $auth){ ?>		
			
				<option <?php if ($auth['id'] ==  $b['author']){echo "selected";} ?> value="<?php echo $auth['id'];?>" ><?php echo $auth['name'];?></option>

				<?php }?>
</select>
   </div>
  <div class="form-group">
     <label>Book Category</label>
  <select name="category" class="form-control">
				<?php foreach ($category as $cat){ ?>		
			
				<option  <?php if ($b[5] ==  $cat[0]){echo "selected";} ?>  value="<?php echo $cat['id'];?>" ><?php echo $cat['name'];?></option>

				<?php }?>
</select>
   </div>
    <div class="form-group">
    <label>Book Description</label>
    <textarea name="description"  class="form-control"  placeholder=" Enter description"><?php echo $b['description'];?></textarea>
  </div>
   <div class="form-group">
    <label>Book Summary</label>
    <textarea name="summary"  class="form-control"  placeholder=" Enter Summary" required ><?php echo $b[10];?></textarea>
  </div>
  
   
   
    <div class="form-group">
    <label>Book Price</label>
    <input name="price" type="text" class="form-control"  placeholder=" Enter Price" value="<?php echo $b['price'];?>">
  </div>
  
    <div class="form-group">
    <label>Book Quantity</label>
    <input name="quantity" type="number" type="number" class="form-control"  placeholder=" Enter Quantity"  value="<?php echo $b['quantity'];?>">
  </div>

    
                     
  
  <?php } ?>
      
      <div class="form-group">  
                          <label>Select File <br />  
                               <input type="file" name="image_upload"  />  
                          </label>  
                     </div>  
  <div>
  <input name="submit1" type="submit" class="btn btn-primary" value="Update"/>
  <a href="books.php" class="btn btn-default">Cancel</a>
  
  </div>
  <br>
</form>


  <?php 
include('footer.php');

?>  