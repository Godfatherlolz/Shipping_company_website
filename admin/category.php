<?php include'../class/crud.php';?>
<?php include'../class/category.php';?>
<?php 
session_start();

$cc=new crud();
if(isset($_POST['addcategory'])){
	
	$title=$_POST['category'];
	
	
	
	// upload method //
	

	
	
	if($title=='' ){
		$error="please fill the fara8";
		
	}else{

$cat = new category($title);
	
		
		
		if($cc->insertCategory($cat,$cc->conn))
		{
			echo '<script language="Javascript">
			
				document.location.replace("category.php?msg=You successfully add this category");
				
			</script>';
		//header("Location: books.php?msg=dellaa");
			
		}
		
	}
	
}









if (isset($_POST["delete"])){
	
	$cc->supprimerCategory($_POST['id'],$cc->conn);
	
			echo '<script language="Javascript">
				document.location.replace("category.php?msgDelete=You successfully delete this Category")
			</script>';
		//header("Location: books.php?msgDelete=You successfully delete this book");
			
	

}



////////    count ///////////
	$list2=$cc->CountCategory($cc->conn);
////////**********************/////////

			
						foreach ($list2 as $l2){
							$nombre= $l2[0];
						}
						
						
/////////////////////						
///////////////////// pagination /////////////////





$list=$cc->afficheCategoryPagination($cc->conn,0,1000);



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
                            Product Management <small>: Category</small>
							
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / Product / Category 
								
                            </li>
                        </ol>
                    </div>
                </div>

    <!-- /.row -->

                <div class="row">
                
					
					 
					 <div class="col-md-8 ">
					 <form class="form-inline"  method="post"  action="category.php"  id="tryitForm" name="myForm" >
													<div class="col-md-4 ">
													<div class="form-group">
														
														<input type="text" class="form-control" id="category" placeholder="Add new Category" name="category" >
													</div>
													</div>
												

				<div class="col-md-3 ">
													<button type="submit" class="btn btn-primary" name="addcategory"><i class="fa fa-plus" aria-hidden="true"></i> ADD</button> </div>
											</form>
					 
					 </div>
					 
                   
                </div>
				
                <!-- /.row -->

		<HR size=2px>
								<div class="col-lg-3 ">
							   </div>
								<div class="col-lg-2 ">
							   </div>
   
								 
								<br>
								
								
               
    
							   	<table id="dellaa" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Category ID</th>
				<th>Category </th>
				<th></th>
				<th>Action </th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Category ID</th>
				<th>Category </th>
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
					<td><strong><a href="edit_category.php?id=<?php echo $l[0];?>"><?php echo $l[1];?>  </a></strong></td>
				
					
				
					
					<form action="category.php" method="POST" >
					<td><input type="text" value="<?PHP echo $l[0] ?>" name="id" hidden></td>
					<td><input name="delete" type="submit" class="btn btn-danger" value="Delete" /> </form > <a href="edit_category.php?id=<?php echo $l[0];?>"> <input name="delete" type="submit" class="btn btn-primary" value="Update" />   </a></td>
					
			
			
			
			
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
