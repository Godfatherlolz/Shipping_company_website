
 <?php
include('header.php');
include ("../class/crud.php");
include ("../class/blog.php");

$cc=new crud();

$id= $_GET['id'];


$book=$cc->rechercheBlog($cc->conn,$id);


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
                $new_height = 400;  
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

	$title=htmlentities($_POST['title']);
  $author=$_POST['author'];
  $text=htmlentities($_POST['text']);
$shorttitle=htmlentities($_POST['shorttitle']);


		if($new_name== ''){


			foreach ($book as $b){  $new_name = $b['image'];}

  }

 $prod=new blog($title,$text,$author,$new_name,$shorttitle);

	if($cc->updateBlog($cc->conn,$prod,$id)){
			echo '<script language="Javascript">

				document.location.replace("blog.php?msg= successfully updated ");

			</script>';
		//header("Location: books.php?msg=dellaa");

		}


}
$authoor=$cc->afficheAuthor($cc->conn);

?>

<h1 class="page-header">
                            Product Management <small>: Edit Post</small>

                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-book" aria-hidden="true"></i> <a href="index.php">dashboard</a> / Blog / <a href="blog.php">books </a> / Edit-blog

                            </li>
                        </ol>
                        <br>



  <?php foreach ($book as $b){ ?>







   <aside class="right-side">
            <!-- Content Header (Page header) -->

            <!--section ends-->
            <section class="content paddingleft_right15">
                <!--main content-->
                <div class="row">
                    <div class="the-box no-border">
                        <form role="form" method="post" name="myForm" action="edit_blog.php?id=<?php echo $b[0];?>" enctype="multipart/form-data" id="tryitForm" class="form-horizontal">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group" style="padding-left: 15px ;padding-right: 15px" >
                                        <input  type="text" name='title' class="form-control input-lg" placeholder="Post title here..." value="<?php echo $b[1];?> " required  >
                                    </div>
                                    <div class="form-group" style="padding-left: 15px ;padding-right: 15px" >
                                        <input  type="text" name='shorttitle' class="form-control input-lg" placeholder="Post a Short subject here..." value="<?php echo $b[7];?>" >
                                    </div>
                                    <div class='box-body pad'>

                                            <textarea  id="editor" class="textarea" name="text" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required ><?php echo $b[2];?>
                                            </textarea>

                                    </div>
                                </div>
                                <!-- /.col-sm-8 -->
                                <br><br>
                                <div class="col-sm-4">

                                   <br><br>
                                    <div class="form-group" style="padding-right: 10px">
                                        <label>Post author</label>
                                        <input type="text" name="author" class="form-control" placeholder="Post author" value="<?php echo $b[4];?> " required>
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







  <?php } ?>






  <?php
include('footer.php');

?>
