  <?php 


include ("../class/crud.php");
session_start();
if(!isset($_SESSION['showperpage'])){
	$_SESSION['showperpage']=10;
	
	
	
}
$cc=new crud();

if (isset($_POST["delete"])){
	$cc->supprimerlivreur($_POST['id'],$cc->conn);
		
}
if (isset($_POST["modifier"])){
	
}

////////    affichage ///////////
$list=$cc->affichelivreurPagination($cc->conn,0,10000);
//$list=$cc->affichelivreur($cc->conn);
////////**********************/////////

////////    count ///////////
	$list2=$cc->Countlivreur($cc->conn);
////////**********************/////////

			
						foreach ($list2 as $l2){
							$nombre= $l2[0];
						}
					



?>  
<?php include('header.php'); ?>


				<div class="row">
                    <div class="col-lg-12">
							
                        <h1 class="page-header">
                            DELIVERY COMPANY<small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / DELIVERY / DELIVERY COMPANY
                            </li>
                        </ol>
                    </div>
                </div>

    <!-- /.row -->

                <div class="row">
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nombre;?></div>
                                        <div>DELIVERY COMPANY </div>
                                    </div>
                                </div>
                            </div>
                            <a href="addlivreur.php">
                                <div class="panel-footer">
                                    <span class="pull-left">ADD DELIVERY COMPANY</span>
                                    <span class="pull-right"><i class="fa fa-plus-square" aria-hidden="true"></i></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
							
                        </div>
                    </div>
                    
                   
                </div>
                <!-- /.row -->
<br>
				<table id="dellaa" class="display" cellspacing="0" width="100%">
				<thead>
			<tr>	
				<th>ID</th>
				<th>NAME</th>
				<th>PRICE</th>
				<th>LOGO</th>
				<th>MAIL</th>
				<th>DESCRIPTION</th>
				<th>DELETE</th>
				<th>UPDATE</th>
				
			</tr>
			</thead>
				<tfoot>
			<tr>	
				<th>ID</th>
				<th>NAME</th>
				<th>PRICE</th>
				<th>LOGO</th>
				<th>MAIL</th>
				<th>DESCRIPTION</th>
				<th>DELETE</th>
				<th>UPDATE</th>
				
			</tr>
			</tfoot>
				
					<?php

						foreach ($list as $l){
					?>
			<tr>
					
					<td><?php echo $l[0] ;?> </td>
					<td><?php echo $l[1] ;?> </td>
					<td><?php echo $l[2] ;?> </td>
					<td><img src="livreur/<?php  echo $l[3];?>"/></td>
					<td><?php echo $l[4] ;?> </td>
					<td><?php echo $l[5] ;?> </td>
					<td>
					<a href="supplivreur.php?id=<?php echo $l[0]?>"class="btn btn-danger">DELETE</a>			
			       </td>
					<td>
					<a href="modifierlivreur.php?id=<?php echo $l[0]?>"class="btn btn-danger">UPDATE</a>			
			</td>
			</tr>
			       <?php
					}
					?>
				
			
		  </table>

















  <?php 
include('footer.php');

?>  
