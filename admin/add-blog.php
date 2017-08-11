<?php
include('header.php');
include ("../class/crud.php");
include ("../class/blog.php");

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
                $path = '../images/blog/' . $new_name;
                list($width, $height) = getimagesize($_FILES["image_upload"]["tmp_name"]);
                if($ext == 'png')
                {
                     $new_image = imagecreatefrompng($_FILES["image_upload"]["tmp_name"]);
                }
                if($ext == 'jpg' || $ext == 'jpeg')
                {
                     $new_image = imagecreatefromjpeg($_FILES["image_upload"]["tmp_name"]);
                }
                $new_width = 830;
                $new_height = 260;
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
	$text=htmlentities($_POST['text']);
  $shorttitle=htmlentities($_POST['shorttitle']);

	if($new_name== ''){
    $new_name = 'No_Image_Available.png';
  }
	// upload method //




	if($title=='' ){
		$error="please fill the blanks";

	}else{

		/*$query= " insert into product (title,author,description,price,categoryID,quantity,image,summary)
		values('$title', '$author', '$description' , $price, $category,'$quantity','$new_name','$summary')";*/

		$prod=new blog($title,$text,$author,$new_name,$shorttitle);
//$cc->conn->query($query


	}

}




?>


			 <h1 class="page-header">
                            Blog Management <small>: Add Post</small>

                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-book" aria-hidden="true"></i> <a href="index.php">dashboard</a> / blog / <a href="blog.php">Blog </a> / add-Post

                            </li>
                        </ol>









<br>

 <aside class="right-side">
            <!-- Content Header (Page header) -->

            <!--section ends-->
            <section class="content paddingleft_right15">
                <!--main content-->
                <div class="row">
                    <div class="the-box no-border">
                        <form role="form" method="post" name="myForm" action="add-blog.php" enctype="multipart/form-data" id="tryitForm" class="form-horizontal">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group" style="padding-left: 15px ;padding-right: 15px" >
                                        <input  type="text" name='title' class="form-control input-lg" placeholder="Post title here..." >
                                    </div>
                                    <div class="form-group" style="padding-left: 15px ;padding-right: 15px" >
                                        <input  type="text" name='shorttitle' class="form-control input-lg" placeholder="Post a Short subject here..." >
                                    </div>
                                    <div class='box-body pad'>

                                            <textarea  id="editor" class="textarea" name="text" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                                    </div>
                                </div>
                                <!-- /.col-sm-8 -->
                                <br><br>
                                <div class="col-sm-4">

                                   <br><br>
                                    <div class="form-group" style="padding-right: 10px">
                                        <label>Post author</label>
                                        <input type="text" name="author" class="form-control" placeholder="Post author">
                                    </div>
                                    <div class="form-group">
                                        <label>Featured image</label>



                               <input type="file" name="image_upload" id="image_upload" />




                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success"  name="submit1" type="submit"  value="Submit">Save and post</button>
                                        <a href="blog.php" class="btn btn-danger">Discard</a>
                                    </div>
                                </div>
                                <!-- /.col-sm-4 -->
                            </div>
                            <!-- /.row -->
                        </form>
                    </div>
                </div>
                <!--main content ends-->
            </section>
            <!-- content -->
        </aside>






<?php
include('footer.php');

?>
