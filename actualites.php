

<?php include'class/crud.php';?>

<?php
include ("class/function.php");
if(!isset($_SESSION))
    {
        session_start();

    }

$cc=new crud();
$_SESSION['showperpage']=3;
////////    count ///////////
  $list2=$cc->CountBlog($cc->conn);
////////**********************/////////


            foreach ($list2 as $l2){
              $nombre= $l2[0];
            }


/////////////////////
///////////////////// pagination /////////////////

if (!isset($_POST["showbtn"])){

    $bookParPage = 20;

}

if (isset($_POST["showbtn"])){

    $bookParPage = intval($_POST["show"]);
    $_SESSION['showperpage']=$bookParPage;



}

$bookParPage=$_SESSION['showperpage'];
$bookTotales = $nombre;
$pagesTotales = ceil($bookTotales/$bookParPage); // valeur arrondi



if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $pagesTotales) {
   $_GET['page'] = intval($_GET['page']);
   $pageCourante = $_GET['page'];
} else {
   $pageCourante = 1;
}

$depart = ($pageCourante-1)*$bookParPage;



  $list=$cc->afficheBlogPagination($cc->conn,$depart,$bookParPage);





////////    affichage ///////////
  //$list=$cc->afficheProduitWithCategory($cc->conn);
////////**********************/////////


      $cat=$cc->afficheCategory($cc->conn);



?>
<?php include "header.php"; ?>


<div class="breadcum">
    <div class="container">
        <ol class="breadcrumb">
            <li>
                <a href="index.html"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                </a>
            </li>
            <li class="hidden-xs">
                <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                <a href="#">News</a>
            </li>
        </ol>
        <div class="pull-right">
            <i class="livicon icon3" data-name="responsive-menu" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> News
        </div>
    </div>
</div>
<!-- //Breadcrumb Section End -->
<!-- Container Section Start -->
<div class="container">
  <div class="row-1">
<aside style="float: right;">
       <div class="right">

               <span class="left">News <?php echo $depart+1;?> to
                                       <?php if( $depart+$bookParPage < $nombre){

                                       echo $depart+$bookParPage ;}else{
                                           $resul= ($depart+$bookParPage)-($nombre);
                                           echo $depart+$bookParPage - $resul;

                                       }

                                           ?>
                                           of <?php echo $nombre;?> total</span>


          <form method="post" name="myForm" action="actualites.php" enctype="multipart/form-data"  >
                                          <span>Show</span>
                                          <span>
                                              <select name="show">

                                                  <option value="5" <?php if($bookParPage==5){echo 'selected'; }?> >5</option>
                                                  <option value="10" <?php if($bookParPage==10){echo 'selected';}?>>10</option>
                                                  <option value="15" <?php if($bookParPage==15){echo 'selected';}?> >15</option>
                                                  <option value="20" <?php if($bookParPage==20){echo 'selected';}?> >20</option>

                                              </select>
                                          </span>
                                          <span> Post per page</span>
                                          <input name="showbtn" type="submit" class="btn  btn-info" value="Show"/>

                                          <br>

                                      </form>
      </div></aside>
  </div>

    <div class="row news">
        <div class="col-md-8">
            <!-- News1 Section Start -->
            <div class="blog thumbnail">
                <label>
                    <a href="news_item.html"><h3 class="primary news_headings">Jelly-o sesame snaps halvah croissant oat cake cookie</h3></a>
                </label>
                <img src="images/img_b2.jpg" alt="image" class="img-responsive">
                <div class="news_item_text_1">
                    <p>
                        But they got diff'rent strokes. It takes diff'rent strokes - it takes diff'rent strokes to move the world. Go Speed Racer. Go Speed Racer. Go Speed Racer go! That this group would somehow form a family that's the way we all became the Brady Bunch. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Well we're movin' on up to the east side to a deluxe apartment in the sky. These Happy Days are yours and mine Happy Days. And we know Flipper lives in a world full of wonder flying there-under under the sea. Baby if you've ever wondered - wondered whatever became of me. I'm living on the air in Cincinnati. Cincinnati WKRP. It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight.
                    </p>
                    <p class="text-right">
                        <a href="news_item.html" class="btn btn-primary text-white">
                            Read more
                        </a>
                    </p>
                </div>
            </div>
            <!-- //News1 Section End -->
            <!-- New2 Section Start -->

            <?php foreach ($list as $l){


            ?>
            <!-- Start Blog Post Section -->
              <div class="blog thumbnail">
            <article class="b-post">
              <label>
                  <a href="news_item.php"><h3 class="primary news_headings"><?php echo $l[1] ; ?></h3></a>
              </label>

                <div class="b-post-img">
                  <img src="images/blog/<?php echo $l[6] ; ?>" alt="image" class="img-responsive"/>
                </div>
                <div class="news_item_text_1">
                  <p><?php echo shortText('<html><body>'.$l[2].'</body></html>' , 280)  ;?> </p>
                  <div class='row'>
<div class="col-md-8"></div>
<div class="col-md-4"><p class="text-right">

          <ul class="post-nav">
              <li>Posted by<p style = 'color:green'><?php echo $l[4] ; ?></p> </li>
              <li>on <?php echo $l[3] ; ?></li>
                <li><a href="#"><?php echo $l[5] ; ?> Comments</a></li>
            </ul>

            <a href="blog-detail.php?id=<?php echo $l[0] ; ?>" class="btn btn-primary text-white" style ='margin-left:40px'>Read More</a>


</p></div>

                </div>
</div>





            </article>
            </div>
          <!-- End Blog Post Section -->


          <?php } ?>
            <!-- //News2 Section  End-->
            <!-- New3 Section Start -->
            <?php if(  (   !isset($_GET['authorid'])  ) and (   !isset($_GET['categoryid'])  )  and (!isset($_POST['textsearch']))) { ?>
                <div class="pagination">

                      <ul class="pagination">
          <?php if( $pageCourante == 1){
          $test1='class="disabled"';
          }
          else{
          $test1='';
          }
          ?>

          <li <?php echo $test1; ?> ><a href="actualites.php?page=<?php  if($pageCourante!=1){ echo $pag=$pageCourante-1;}else{echo 1;}?> ">Prev</a></li>

           <?php
          for($i=1;$i<=$pagesTotales;$i++) {
          // echo '<li><a href="#">'.$i.'</a></li>';
          if($i == $pageCourante) {
             echo '<li class=" active"><span>'.$i.'</span></li>';

          } else {
             echo  '<li><a href="actualites.php?page='.$i.'">'.$i.'</a></li>';

          }
          }
          ?>

          <?php if( $pageCourante == $pagesTotales){
          $test='class="disabled"';
          }
          else{
          $test='';
          }
          ?>
          <li <?php echo $test; ?> ><a href="actualites.php?page=<?php  if($pageCourante == $pagesTotales){echo $pageCourante; }else{echo $pag=$pageCourante+1;}?> ">Next</a></li>
          </ul>


                </div>
                <?php } ?>
            <!-- //News3 Section End -->
        </div>
        <div class="col-md-4 ">
            <!-- Tabbable-Panel Start -->
            <div class="tabbable-panel">
                <!-- Tabbablw-line Start -->
                <div class="tabbable-line">
                    <!-- Nav Nav-tabs Start -->
                    <ul class="nav nav-tabs ">
                        <li class="active">
                            <a href="#tab_default_1" data-toggle="tab">
                            Popular </a>
                        </li>
                        <li>
                            <a href="#tab_default_2" data-toggle="tab">
                            Recent </a>
                        </li>
                    </ul>
                    <!-- //Nav Nav-tabs End -->
                    <!-- Tab-content Start -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_default_1">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/image_13.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">May 10, 2015</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/image_14.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">May 8, 2015</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/image_15.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">May5, 2015</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_default_2">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/image_15.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">May 13, 2015</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/image_13.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#">
                                        <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">May 12, 2015</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object " src="images/image_14.jpg" alt="image">
                                    </a>
                                </div>
                                <div class="media-body">
                                <a href="#">
                                    <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5> </a>
                                    <span class="text-danger">Feb 28, 2015
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="comments">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="images/image_13.jpg" alt="image">
                            </a>
                        </div>
                        <div class="media-body"><a href="#">
                            <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5> </a>
                            <span class="text-danger">Feb 28, 2015</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">

                            <img class="media-object" src="images/image_14.jpg" alt="image">
                            </a>
                        </div>
                        <div class="media-body">
                             <a href="#">
                                <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">May 11, 2015</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="images/image_15.jpg" alt="image">
                            </a>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading text-primary">Efficiently unleash cross-media information without cross-media value.</h5></a><span class="text-danger">Feb 28, 2015</span>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Tab-content End -->
        </div>
        <!-- //Tabbablw-line End -->
    </div>
    <!-- Tabbable_panel End -->
</div>
<!-- //Container Section End -->
<?php include "footer.php"; ?>
