

<?php include'class/crud_client_admin.php';?>
<?php 
session_start();
if(!isset($_SESSION['showperpage'])){
	$_SESSION['showperpage']=10;
	
	
	
}

$cc=new crud();

if (isset($_POST["delete"])){
	
	if($cc->supprimerClient($_POST['id'],$cc->conn)){
	
			echo '<script language="Javascript">
				document.location.replace("books.php?msgDelete=You successfully delete this client")
			</script>';
		//header("Location: books.php?msgDelete=You successfully delete this book");
			}
	

}



////////    count ///////////
	$list2=$cc->CountClient($cc->conn);
////////**********************/////////

			
						foreach ($list2 as $l2){
							$nombrec= $l2[0];
						}
						
						
/////////////////////						
///////////////////// pagination /////////////////






////////    affichage ///////////
	//$list=$cc->afficheProduitWithCategory($cc->conn);
////////**********************/////////


			$list=$cc->afficheClient($cc->conn);		



?>  
<?php include'header.php';?>





				<div class="row">
                    <div class="col-lg-12">
						
					
						
						
						
										<?php if(isset($_GET['msg'])) :?>
												<div class="alert alert-success">
												<strong>Well done!</strong>
												<?php echo htmlentities($_GET['msg']) ;?>    

												</div>
								
										<?php endif;?>
										<?php if(isset($_GET['msgDelete'])) :?>
												<div class="alert alert-warning">
												<strong>Well done!</strong>
												<?php echo htmlentities($_GET['msgDelete']) ;?>    

												</div>
								
										<?php endif;?>
										
										
			
			
                        <h1 class="page-header">
                            Client Management <small>:Clients</small>
							
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / Clients
								
                            </li>
                        </ol>
                    </div>
                </div>

    <!-- /.row -->

                <div class="row">
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow	">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nombrec;?></div>
                                        <div>Clients </div>
                                    </div>
                                </div>
                            </div>
                            <a href="add-book.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View client</span>
                                    <span class="pull-right"><i class="fa fa-plus-square" aria-hidden="true"></i></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
					
					 
					
                   
                </div>
                <!-- /.row -->

		
							   
							
								
								
								
               
    
				<table id="dellaa" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Id</th>
				<th>Email</th>
				<th>Societe</th>
				
				<th>Nom</th>
				<th>Prenom</th>
				<th>Telephone</th>
				<th>registration date</th>
				
				<th></th>
				<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Id</th>
				<th>Email</th>
				<th>Societe</th>
				
				<th>Nom</th>
				<th>Prenom</th>
				<th>Telephone</th>
				<th>registration date</th>
				
				<th></th>
				<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<?php

						foreach ($list as $l){
					?>
			<tr>
					
				
					<td><?php echo $l[0] ;?> </td>
					<td><?php echo $l[1] ;?> </td>
					<td><?php echo $l[4] ;?> </td>
					<td><?php echo $l[6] ;?> </td>
					<td><?php echo $l[7] ;?> </td>
					<td><?php echo $l[13] ;?> </td>
					<td><?php echo $l[16] ;?> </td>	
					
					<form action="books.php" method="POST" >
					<td><input type="text" value="<?PHP echo $l[0] ?>" name="id" hidden ></td>
					<td><input name="delete" type="submit" class="btn btn-danger" value="View" /> </td>
					
					</form >
			
			
			
			</tr>
			       <?php
					}
					?>
				

					</tbody>
					</table>

     


	

















  <?php 
include('footer.php');

?>  
