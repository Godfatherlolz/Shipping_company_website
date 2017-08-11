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

                         <?php echo $_SESSION['nom']; ?> <?php echo $_SESSION['prenom']; ?>&nbsp;  <span class="glyphicon glyphicon-user"></span>
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
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span><a href="#"> <i class="livicon" data-name="responsive-menu" data-size="25" data-loop="true" data-c="#757b87" data-hc="#ccc"></i>
                    </a></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo_position">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="societe.php"> Notre société </a>
                    </li>
                    <li class="dropdown"><a href="services.php" class="dropdown-toggle" data-toggle="dropdown"> Services</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="transit.php">Transit</a>
                            </li>
                            <li><a href="maritime.php">Agence Maritime</a>
                            </li>
                            <li><a href="transport.php">Transport </a>
                            </li>
                            <li><a href="entreposage.php">Entreposage </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="service.php" class="dropdown-toggle" data-toggle="dropdown"> Activités</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="activites.php#Aeronautique">Aéronautique</a>
                            </li>
                            <li><a href="activites.php#automobile">Automobile</a>
                            </li>
                            <li><a href="energie.php">Énergie</a>
                            </li>
                            <li><a href="industrie_chimique.php">Industrie chimique</a></li>
                            <li><a href="textile.php">Textile </a></li>
                            <li><a href="agriculture.php">Agriculture</a></li>
                            <li><a href="manufacture.php">Industrie manufacturières</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="media.php" class="dropdown-toggle" data-toggle="dropdown"> Ressources </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="portfolio.html">Portfolio</a>
                            </li>
                            <li><a href="portfolioitem.html">Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Actualités</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="actualites.php">Articles</a>
                            </li>
                            <li><a href="breaking.php">Nouveautés    <span class="label label-danger">New</span></a>
                            </li>
                        </ul>
                    </li>
                    <li ><a href="agences.php"  > Agences </a>

                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Aide <span class="glyphicon glyphicon-question-sign"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="contact.php">Contact</a>
                            </li>
                            <li><a href="faq.php">FAQ    <span class="label label-danger">New</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Nav bar End -->
    </header>
