<?php
if(!isset($_SESSION))
    {
        session_start();

    }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Socotu- Admin</title>
    <link rel="icon" href="img/favicon.ico">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	 <link rel="stylesheet" href="css/Lobibox.min.css"/>
   <link rel="stylesheet" type="text/css" href="jTable/media/css/jquery.dataTables.css">



   <link href="vendors/css/pages/form2.css"  rel="stylesheet"/>
<link href="vendors/css/pages/form3.css" rel="stylesheet"/>
<link href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet" />
<link href="vendors/validation/dist/css/bootstrapValidator.min.css" rel="stylesheet"/>

<link href="vendors/css/panel.css" rel="stylesheet" type="text/css"/>


   <link rel="stylesheet" href="vendors/css/pages/blog.css" />
    <link href="vendors/bootstrap-wysihtml5-rails-b3/src/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
   <!-- <link rel="stylesheet" type="text/css" href="jTable/resources/syntax/shCore.css">
    <link rel="stylesheet" type="text/css" href="jTable/resources/demo.css">
    <style type="text/css" class="init"></style>-->

<script src="CKeditor/ckeditor.js"></script>
    <script src="CKeditor/samples/js/sample.js"></script>
   <!-- <link rel="stylesheet" href="CKeditor/samples/css/samples.css">-->
    <link rel="stylesheet" href="CKeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

    <script src="chartjs/dist/Chart.bundle.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>




</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background:#003972;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style=" margin-bottom:30px;" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><div class="col-md-3"><img src="../images/logoadmin.png" class="img-responsive" ></div>  <div class="col-md-9" style="color:white">Panel-Administratif/Dashboard</div> </a>
          </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav" style="color:black;">

                <li class="dropdown"  >

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell "></i><?php if(isset( $nombret)){ echo $nombret;}?><b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="admin_ticket.php">Tickets <span class="label label-default">New <?php if(isset( $nombret)){ echo $nombret;}?></span></a>
                        </li>

                    </ul>
                </li>
                <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['email_admin']; ?>  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="deconnexion.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse"  >
                <ul class="nav navbar-nav side-nav" style="margin-top:30px;" >
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li >
					&nbsp;
                    </li>



                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#blog"><i class="fa fa-fw fa-edit"></i> Articles <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="blog" class="collapse">
                             <li>
                                <a href="blog.php"><i class="fa fa-book" aria-hidden="true">  </i> &nbsp;Gestion des articles</a>
                            </li>

                            <li>
                                <a href="blog.php"><i class="fa fa-bars" aria-hidden="true">  </i> &nbsp;Gestion des Commentaires</a>
                            </li>

                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#zarkouna"><i class="fa fa-fw fa-edit"></i> Clients <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="zarkouna" class="collapse">
                            <li>
                                <a href="clients.php"> Clients List </a>
                            </li>
                            <li>
                                <a href="show_admin.php"> UserAdmin  </a>
                            </li>
                        </ul>
                    </li>

					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#hamza"><i class="fa fa-fw fa-edit"></i> Cotations <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="hamza" class="collapse">
                            <li>
                                <a href="admin_cotation_m.php"> Non Résolus </a>
                            </li>
                            <li>
                                <a href="admin_cotation_m_ref.php"> Refusées </a>
                            </li>
                            <li>
                                <a href="admin_cotation_m_acc.php"> Acceptées </a>
                            </li>

                        </ul>
                    </li>

				    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#khaled"><i class="fa fa-fw fa-edit"></i> Support <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="khaled" class="collapse">
                            <li>
                                <a href="admin_ticket.php"> <span class="glyphicon glyphicon-file"></span> Unresolved Responds </a>
                            </li>
                            <li>
                                <a href="admin_ticketresloved.php"> <span class="glyphicon glyphicon-file"></span> Resolved Responds </a>
                            </li>
                            <li>
                                <a href="#"> <span class="glyphicon glyphicon-signal"></span> Statistics  </a><!--Stat by Users who used support-->
                            </li>

                            <li>
                                <a href="admin_uptime.php"> <span class="glyphicon glyphicon-ok-sign"></span> Store uptime</a><!--Stat by Users who used support-->
                            </li>
                        </ul>
                    </li>







                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
		<div id="page-wrapper" >

            <div class="container-fluid" style=" margin-top:30px;">
