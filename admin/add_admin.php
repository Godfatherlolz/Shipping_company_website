
<?php include 'class/crudAdmin.php';
?>
<?php 
$cc=new crudAdmin;








if (isset($_POST['ok'])) {
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT,['cost'=>12]);

$email = ($_POST['email']);

            $c1=new Admin($email,$password);

if ($cc->insertAdmin($c1,$cc->conn))

{



        
header('Location: index.php'); 
}
    
}


						?>
            <?php  include 'header.php' ;?>
       <div  class="container" >
				<div class="row">
                    <div class="col-lg-12">
						
					
										
										
										
			
			
                        <h1 class="page-header">
                            Admin <small> Add new admin  </small>
							
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / Admin/ Add new admin
								
                            </li>
                        </ol>
                    </div>
                </div>

    <!-- /.row -->

              
                <!-- /.row --><div class="row">
				
				
				
				<div class="col-md-4">
				<h1>Add new Admin </h1>

               <form  action="" method="POST" name="myForm"  enctype="multipart/form-data" id="tryitForm" class="form-horizontal" >


 

 <div class="form-group">
    <label>admin email</label>
    <input name="email" type="email" class="form-control"  placeholder=" Enter email"  required >
     
  </div>

           <div class="form-group">
    <label>admin password</label>
    <input name="password" type="password" class="form-control"  placeholder=" Choose password"  required >
     
  </div>

 
     


						
                    
                        
                        <input type="submit" name="ok" class="btn btn-primary" value="add admin">
                   </form> 
                   </div>
				</div>
				</div>
				
<?php include 'footer.php';?>
