

<?php 
include ("../crudcommande.php");
include ("../crudlignecommande.php");
$cc=new crudcommande();

session_start();
if(!isset($_SESSION['showperpage'])){
	$_SESSION['showperpage']=10;
	
	
	
}

 $list2=$cc->countcommande($cc->conn);
       
                        foreach ($list2 as $l2){
                            $nombre= $l2[0];
                        }
                       



////////    affichage ///////////
	$list=$cc-> affiche($cc->conn);


$list=$cc->affichecommandePagination($cc->conn,0,1000);



?>  
<?php include'header.php';?>





				<div class="row">
                    <div class="col-lg-12">
						
					
						
						
						  <h1 class="page-header">
                            Order Management <small>: Orders</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / Orders
                            </li>
                        </ol>

                    </div>
                </div>

    <!-- /.row -->

                 <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                           <div class="huge"><?php echo $nombre;?></div>

                                        <div>Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="exporter.php">
                                <div class="panel-footer">
                                    <span class="pull-left">EXCEL</span>
                                    <span class="pull-right"><i class="fa fa-file-excel-o" aria-hidden="true"></i></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <a href="commande.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
<a href="stat.php" class="btn btn-primary">stat</a>
<a href="stath.php" class="btn btn-primary">stat/MOIS</a>
<a href="stat_liv.php" class="btn btn-primary">akram</a>

                <!-- /.row -->

							<br>

                         


<div>


<table id="dellaa" class="display" cellspacing="0" width="100%">
				
                                                
				<thead>
<tr class="active">
				<th>Order_Id</th>
				<th>Order_Price</th>
				<th>Order_Date</th>
				<th>Client_id</th>
                <th width="25%">View_Details </th>

				
				
			</tr>
			</thead>
				<tfoot>
					<tr>
						<th>Order_Id</th>
				<th>Order_Price</th>
				<th>Order_Date</th>
				<th>Client_id</th>
                <th width="25%">View_Details </th>

					</tr>
				</tfoot>
				<tbody>
					<?php

						foreach ($list as $l){
					?>
			<tr>
					                                  

					<td ><?php echo $l[0] ;?> </td>
					<td ><?php echo $l[1] ;?> </td>
					<td ><?php echo $l[2] ;?> </td>
					<td ><?php echo $l[3] ;?> </td>
				<td><a href="affiche_details.php?id=<?= $l['id_commande']; ?>" class="btn btn-primary">view order detail</a></td>
			
			</tr>
			       <?php
					}
					?>
				

					</tbody>
					</table>









  <?php 
include('footer.php');

?>  
