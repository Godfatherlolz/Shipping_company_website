<?php
if(!isset($_SESSION))
    {
        session_start();

    }
 ?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOCOTU</title>
    <!--icon-->
    <link rel="icon" href="admin/img/favicon.ico">

    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
      <link rel="stylesheet" type="text/css" href="css/contact.css">
      <link rel="stylesheet" type="text/css" href="css/news.css">
      <link rel="stylesheet" type="text/css" href="css/timeline.css">
      <link rel="stylesheet" href="vendors/tags/dist/bootstrap-tagsinput.css" />
      <link rel="stylesheet" type="text/css" href="css/faq.css">
      <link rel="stylesheet" type="text/css" href="css/portfolio.css">
<link rel="stylesheet" type="text/css" href="css/collis.css">

      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/blog.css">
      <!--buttons-->


    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="css/tabbular.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.circliful.css">
    <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.theme.css">
    <link href="back/vendors/modal/css/component.css" rel="stylesheet">

    <!--end of page level css-->
    <link href="notif/css/jquery_notification.css" type="text/css" rel="stylesheet"/>

        <!--<script type="text/javascript" src="notif/js/jquery.js"></script>-->
        <script type="text/javascript" src="notif/js/jquery_notification_v.1.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
            });
        </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
 <link rel="stylesheet" href="css/pages/jscharts.css" />
 <script type="text/javascript" src="jsk.js"></script>
</head>

<body>

<?php
                if (isset($_GET["type"])) {
                    $message = $_GET["message"];
                    $type = $_GET["type"];
                    ?>
                     <script type="text/javascript">
                        showNotification({
                            message: "<?php echo $message; ?>",
                            type: "<?php echo $type; ?>",
                            autoClose: true,
                            duration: 5
                        });
                    </script>
                    <?php
                }
                ?>


    <!-- Header Start -->
    <header>
        <!-- Icon Section Start -->
        <div class="icon-section">
            <div class="container">
                <ul class="list-inline">
                    <li>
                        <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                      <a href="mailto:"> <i class="livicon" data-name="mail" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                      </a>
                    </li>

                    <li class="pull-right">
                     <?php
             if((isset($_SESSION['email'])) and (!empty($_SESSION['email'])) ){
                ?>


<ul class="list-inline icon-position">
<li>
                            <a href="user_profile.php" class="btn btn-link" role="button"style="color:white;">

                             <?php echo $_SESSION['email']; ?>   <span class="glyphicon glyphicon-user"></span>
                            </a>
                          </li>
                            <li>
                              <div  style="color:white;"> | </div>
                            </li>
                        <li>
                          <a href="deconnexion.php" class="btn btn-link" role="button" style="color:white;">
                              <span class="glyphicon  glyphicon-log-out"></span>
                              Déconnexion
                          </a>
                           </ul>
                        </li>';



 <?php

            }
             else {
             ?>



                        <ul class="list-inline icon-position">
                          <?php echo '  <li>
                              <a href="register.php" class="btn btn-link" role="button"style="color:white;">

                                Inscription  <span class="glyphicon glyphicon-ok"></span>
                              </a>
                            </li>
                              <li>
                                <div  style="color:white;"> | </div>
                              </li>
                          <li>
                            <a href="ins.php" class="btn btn-link" role="button" style="color:white;">
                                <span class="glyphicon glyphicon-log-in"></span>
                                Connexion
                            </a>
                          </li>';
                          ?>

<?php
           }
             ?>


                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //Icon Section End -->
        <!-- Nav bar Start -->
        <nav class="navbar navbar-default container">
          <div class="col-md-4"style="margin-top:10px;" >
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span><a href="#"> <i class="livicon" data-name="responsive-menu" data-size="25" data-loop="true" data-c="#757b87" data-hc="#ccc"></i>
                    </a></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo_position">
                </a></div>
            </div><div class="col-md-1"style="margin-top:10px;" ><div style="border-left:1px solid #000;height:50px "></div></div>
          <div class="col-md-7" >
            <h2 ><strong>Demande de Cotation Numéro : ID </strong></h2>
          </div>
        </nav>
        <!-- Nav bar End -->
    </header>
