  <?php 
include('header.php');

include ("../class/crud.php");
$cc=new crud();



////////    affichage ///////////
	$list=$cc->affichecadeau($cc->conn);
////////**********************/////////

////////    count ///////////
	$list2=$cc->Countcadeau($cc->conn);
////////**********************/////////

			
						foreach ($list2 as $l2){
							$nombre= $l2[0];
						}
					



?>  



				<div class="row">
                    <div class="col-lg-12">
							
                        <h1 class="page-header">
                            GIFT<small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / DELIVERY / GIFT
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
                                        <div>GIFT </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                   
                </div>
                <!-- /.row -->
<br>
				<table id="dellaa" class="display" cellspacing="0" width="100%">
				<thead>
			<tr>	
				<th>ID</th>
				<th>ID ORDER</th>
				<th>LOGO</th>
				<th>ADRESS</th>
				<th>BILL_ADRESS</th>
				<th>DATE</th>
				<th>STATE</th>
				<th>PRICE</th>
				<th>UPDATE</th>
				
				
			</tr>
			</thead>
					<tfoot>
			<tr>	
				<th>ID</th>
				<th>ID ORDER</th>
				<th>LOGO</th>
				<th>ADRESS</th>
				<th>BILL_ADRESS</th>
				<th>DATE</th>
				<th>STATE</th>
				<th>PRICE</th>
				<th>UPDATE</th>
				
				
			</tr>
			</tfoot>
				
				
					<?php

						foreach ($list as $l){
					?>
			<tr>
					
					<td><?php echo $l[0] ;?> </td>
					<td><?php echo $l[1] ;?> </td>
					<td><img src="livreur/<?php  echo $l[2];?>"/></td>
					<td><?php echo $l[4] ;?> </td>
					<td><?php echo $l[3] ;?> </td>
					<td><?php echo $l[6] ;?> </td>
					<td><?php echo $l[7] ;?> </td>
					<td><?php echo $l[5] ;?> </td>
					<td>
					<form action="cadeauupdate.php">
					<input type="text" value="<?PHP echo $l[0] ?>" name="id" hidden>
              <input type="image" name="update" type="submit" src="livreur/update.png" alt="Submit" width="48" height="48" >
                    </form>
					</td>
					<form action="affichercadeau.php" method="POST">
					<input type="text" value="<?PHP echo $l[0] ?>" name="id" hidden>
					
					
			</form >
			
			</tr>
			       <?php
					}
					?>
				
			
		  </table>

















  <?php 
include('footer.php');

?>  
