<?php include 'header.php';?>
<?php include '../class/crud.php';
      include '../class/chart.php';?>
<?php 
$cc=new crud();


	
	//$alert=htmlentities"<div class="alert alert-success"><a  class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> License updated.</div>";
	if(isset($_POST['submit'])){
	
	$name=$_POST['name'];
	$textchart=htmlentities($_POST['textchart']);
	
	
		$cht= new chart($name,$textchart);
	$cc->updaterchart($cc->conn,$cht);
	}
	$idc=10;
$list=$cc->afficherchart($cc->conn,$idc);
	
?>
<div class="row">
                    <div class="col-lg-12">
						
					
			<div class="alert alert-success"><a  class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> License updated.</div>							
										
			
			
                        <h1 class="page-header">
                            Support <small> License Validation</small>
							
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / <a href="index.php">Support</a>/ <a href="admin_ticket.php">License Edit</a>
								
                            </li>
                        </ol>
                    </div>
                </div><?php foreach ($list as $l){ ?>
				
<form method="post" name="myForm"  enctype="multipart/form-data"  >
<div class="form-group">
  <label  for="comment">License v2</label>
  <input class="form-control" name="name" value="LICENSE">
  <input hidden name="id_chart">
  <textarea class="form-control" name ="textchart" rows="20" id="comment"><?php echo $l[2]; ?></textarea>
  <label class="checkbox-inline"><input name ="agree" type="checkbox" value="">Click here to indicate that you have read and agree to the terms presented in the Terms and Conditions agreement</label>
    <input class="btn btn-success "type="submit" value="submit" name="submit" style="margin-top:18px;"><?php } ?>
  </div></form>
<?php include 'footer.php';?>