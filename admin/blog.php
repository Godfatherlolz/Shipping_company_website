﻿

<?php include'../class/crud.php';?>
<?php 
session_start();
if(!isset($_SESSION['showperpage'])){
	$_SESSION['showperpage']=10;
	
	
	
}

$cc=new crud();

if (isset($_POST["delete"])){
	
	if($cc->supprimerBlog($_POST['id'],$cc->conn)){
	
			echo '<script language="Javascript">
				document.location.replace("blog.php?msgDelete=You successfully delete this blog")
			</script>';
		//header("Location: books.php?msgDelete=You successfully delete this book");
			}
	

}



////////    count ///////////
	$list2=$cc->CountBlog($cc->conn);
////////**********************/////////

			
						foreach ($list2 as $l2){
							$nombre= $l2[0];
						}
						
						
/////////////////////						
///////////////////// pagination /////////////////


$list=$cc->afficheBlogtPagination($cc->conn,0,10000);



////////    affichage ///////////
	//$list=$cc->afficheProduitWithCategory($cc->conn);
////////**********************/////////


			$cat=$cc->afficheCategory($cc->conn);		



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
                            Blog Management <small></small>
							
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / Blog
								
                            </li>
                        </ol>
                    </div>
                </div>

    <!-- /.row -->

                <div class="row">
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-suitcase fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nombre;?></div>
                                        <div>POST </div>
                                    </div>
                                </div>
                            </div>
                            <a href="add-blog.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Add Post</span>
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
						
				<th>Post Title</th>
				<th>Post Author</th>
				<th>Date</th>
				<th></th>
				<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Post Title</th>
				<th>Post Author</th>
				<th>Date</th>
				<th></th>
				<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<?php

						foreach ($list as $l){
					?>
			<tr>
					
					<td><a href="edit_blog.php?id=<?php echo $l[0];?>"><?php echo $l[1];?>  </a></td>
				
					<td><?php echo $l[4] ;?> </td>
					<td><?php echo $l[3] ;?> </td>
				
					
					<form action="blog.php" method="POST" >
					<td><input type="text" value="<?PHP echo $l[0] ?>" name="id" hidden ></td>
					<td><input name="delete" type="submit" class="btn btn-danger" value="Delete" /></form > <a href="edit_blog.php?id=<?php echo $l[0];?>"> <input name="delete" type="submit" class="btn btn-primary" value="Update" /> </a></td>
					
					
			
			
			
			</tr>
			       <?php
					}
					?>
				

					</tbody>
					</table>

     


	

















  <?php 
include('footer.php');

?>  
