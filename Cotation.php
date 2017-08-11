<?php include 'class/crud.php' ;?>
<?php include 'class/function.php' ;?>
<?php include 'class/cot_mar.php' ;?>
<?php
if(!isset($_SESSION))
    {
        session_start();

    }

  $cc=new crud();


if(isset($_POST['cotationm'])){
  $id_user=$_SESSION['id'];
  $typecota=1;
  $cota= new cot_mar ($id_user,$typecota,0,'','','','','','','','',0,'',0,1);
  $cc->insert_Cot_M_1($cc->conn,$cota);
  $liste2=$cc->last_cotam($cc->conn,$id_user);
  foreach ($liste2 as $l2)
      {$num=$l2[0];}
          header('location: test.php?cota='.$typecota.'&idcm='.$num);
      }

 ?>
<?php include 'header.php' ; ?>
<div class="breadcum">
    <div class="container">
        <ol class="breadcrumb">
            <li>
                <a href="index.html"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Socotu
                </a>
            </li>
            <li class="hidden-xs">
                <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                <a href="contact.php">Demande Cotation</a>
            </li>
        </ol>
        <div class="pull-right">
            <i class="livicon icon3" data-name="responsive" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Demande de Cotation
        </div>
    </div>
</div>
<!-- //Breadcrumb Section End -->
<div class="container">
    <section class="purchas-main">
        <div class="container bg-border">
            <div class="row">
                <d
                  <h4><span class="label label-info">Nouveauté</span></h4>
                    <h1 class="purchae-hed">Réclamez votre demande de Cotisation. Veuillez Choisir !</h1>
              </div>
            </div>

    </section>

    <div class="row">
        <!-- What we are Start -->

            <div class="text-left">
                <div>
                    <h3 class="border-primary"><span class="heading_border bg-primary">Demandes De Cotations</span></h3>
                </div>
            </div><div class="col-md-6 col-sm-6">
            <img src="images/image_4.jpg" class="img-responsive"></div>
            <div class="col-md-6 col-sm-6">
            <p>
              Nous avons réussi à tisser des partenariats à long terme en collaboration étroite avec nos clients, développant ainsi une maitrise particulière des chaines d'approvisionnment et une connaissance approfondie des impératifs de ces secteurs d'activité.
            </p><form action=" Cotation.php" method="POST">
            <p><input type ="submit" name="cotationm">
                <div class="text-right primary"><a href="test.php">Voir plus</a></div></form>
            </p></div>

        <!-- //What we are End -->

        <!-- //About Us End -->
    </div>
  </div>
  <?php include 'footer.php' ; ?>
