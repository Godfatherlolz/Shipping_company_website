<?php include'../class/crud.php';?>
<?php 
session_start();

$cc=new crud();
if(isset($_POST['addauthor'])){
	
	$author=$_POST['author'];
	
	
	
	// upload method //
	

	
	
	
		$query= " insert into author (name) 
		values('$author')";
		
		
		if($cc->conn->query($query)){
			echo '<script language="Javascript">
			
				document.location.replace("author.php?msg=You successfully add this author");
				
			</script>';
		//header("Location: books.php?msg=dellaa");
			
		
		
	}
	
}









if (isset($_POST["delete"])){
	
	$cc->supprimerAuthor($_POST['id'],$cc->conn);
	
			echo '<script language="Javascript">
				document.location.replace("author.php?msgDelete=You successfully delete this author")
			</script>';
		//header("Location: books.php?msgDelete=You successfully delete this book");
			
	

}




$list=$cc->afficheAuthorPagination($cc->conn,0,10000);



////////    affichage ///////////
	//$list=$cc->afficheProduitWithCategory($cc->conn);
////////**********************/////////


			$cat=$cc->afficheAuthor($cc->conn);		



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
                            Product Management <small>: Author</small>
							
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / Product / Author 
								
                            </li>
                        </ol>
                    </div>
                </div>

    <!-- /.row -->

                <div class="row">
                
					
					 
					 <div class="col-md-8 ">
					 <form class="form-inline"  method="post"  action="author.php" id="tryitForm" name="myForm"  >
													 <div class="col-md-4">
													<div class="form-group">
														
														<input type="text" class="form-control" id="author" placeholder="Add new Author" name="author" >
													</div>
													</div>
				 <div class="col-md-4 ">
													<button type="submit" class="btn btn-primary" name="addauthor"><i class="fa fa-plus" aria-hidden="true"></i> ADD</button></div>
											</form>
					 
					 </div>
					
                   
                </div>
			
                <!-- /.row -->

		<HR size=2px>
   
								
								
							   	<table id="dellaa" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Author ID</th>
				<th>Author </th>
				<th></th>
				<th>Action </th>
				
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Author ID</th>
				<th>Author </th>
				<th></th>
				<th>Action </th>
				
					</tr>
				</tfoot>
				<tbody>
					
				<?php

						foreach ($list as $l){
					?>
			<tr>
					
					<td><?php echo $l[0] ;?> </td>
					<td><a href="edit_author.php?id=<?php echo $l[0];?>"><?php echo $l[1];?>  </a></td>
				
					
				
					
					<form action="author.php" method="POST" >
					<td><input type="text" value="<?PHP echo $l[0] ?>" name="id" hidden></td>
					<td><input name="delete" type="submit" class="btn btn-danger" value="Delete" /></form > 	<a href="edit_author.php?id=<?php echo $l[0];?>"><input name="delete" type="submit" class="btn btn-primary" value="update" /></a></td>
					
			
			
		
			
			</tr>
			       <?php
					}
					?>

					</tbody>
					</table>
     
             	<br><br><br><br><br>

			












  <?php 
include('footer.php');

?>  
