

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Read-me Admin Dashboard</title>
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
   
   <!-- <link rel="stylesheet" type="text/css" href="jTable/resources/syntax/shCore.css">
    <link rel="stylesheet" type="text/css" href="jTable/resources/demo.css">
    <style type="text/css" class="init"></style>-->
   


    

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> Admin Dashboard</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
				
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell "></i><?php echo $nombret;?><b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="admin_ticket.php">Tickets <span class="label label-default">New <?php echo $nombret;?></span></a>
                        </li>
                    
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin  <b class="caret"></b></a>
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
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li >
					&nbsp;
                    </li>
                   
				   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#hamdi"><i class="fa fa-fw fa-edit"></i> Products <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="hamdi" class="collapse">
							 <li>
                                <a href="books.php"><i class="fa fa-book" aria-hidden="true">  </i> &nbsp;books</a>
                            </li>
							
                            <li>
                                <a href="category.php"><i class="fa fa-bars" aria-hidden="true">  </i> &nbsp;Category</a>
                            </li>
                            <li>
                                <a href="Author.php"><i class="fa fa-pencil" aria-hidden="true"></i> &nbsp;Author</a>
                            </li>
							<li>
								<a href="#"><i class="fa fa-fw fa-bar-chart-o"> </i>&nbsp;Charts</a>
							</li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#zarkouna"><i class="fa fa-fw fa-edit"></i> Clients <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="zarkouna" class="collapse">
                            <li>
                                <a href="#"> zarkouna :D </a>
                            </li>
                            <li>
                                <a href="#"> zarkouna :D </a>
                            </li>
                        </ul>
                    </li>
					
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#hamza"><i class="fa fa-fw fa-edit"></i> Commandes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="hamza" class="collapse">
                            <li>
                                <a href="#"> hamza :D </a>
                            </li>
                            <li>
                                <a href="#"> hamza :D </a>
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
                                <a href="updateChart.php"> <span class="glyphicon glyphicon-ok-sign"></span> Validate License chart </a><!--Stat by Users who used support-->
                            </li>
							<li>
                                <a href="admin_communitypoll.php">  <span class="glyphicon glyphicon-question-sign"></span>  Community polls</a><!--Stat by Users who used support-->
                            </li>
							<li>
                                <a href="admin_uptime.php"> <span class="glyphicon glyphicon-ok-sign"></span> Store uptime</a><!--Stat by Users who used support-->
                            </li>
                        </ul>
                    </li>
					
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#akram"><i class="fa fa-fw fa-edit"></i> Livraison <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="akram" class="collapse">
                            <li>
                                <a href="#"> eddes lil web </a>
                            </li>
                            
                        </ul>
                    </li>
					

					
					
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
		<div id="page-wrapper">

            <div class="container-fluid">