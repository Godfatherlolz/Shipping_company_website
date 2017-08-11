

<?php include'../class/crud.php';?>
<?php 
session_start();

$cc=new crud();


$list=$cc->displayTicket($cc->conn,1);

$list2=$cc->CountTicket($cc->conn);
////////**********************/////////

			
						foreach ($list2 as $l2){
							$nombret= $l2[0];
						}

?>  
<?php include'header.php';?>





				<div class="row">
                    <div class="col-lg-12">
						
					
										<?php //if(isset($_GET['msg'])) :?>
												<div class="alert alert-success">
												<strong>Well done!</strong>
												<?php //echo htmlentities($_GET['msg']) ;?>    

												</div>
								
										<?php //endif;?>
										<?php //if(isset($_GET['msgDelete'])) :?>
												<div class="alert alert-warning">
												<strong>Well done!</strong>
												<?php //echo htmlentities($_GET['msgDelete']) ;?>    

												</div>
								
										<?php //endif;?>
										
										
			
			
                        <h1 class="page-header">
                            Support <small>: Unresolved Tickets</small>
							
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / Support / Unresolved
								
                            </li>
                        </ol>
                    </div>
                </div>

    <!-- /.row -->

                <div class="row">
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-credit-card fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nombret;?></div>
                                        <div>Support Tickets </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Tickets</span>
                                    <span class="pull-right"><i class="fa fa-eye" aria-hidden="true"></i></i></span>
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
						
				<th>DATE</th>
				<th>NAME</th>
				<th>EMAIL</th>
				
				<th>Subject</th>
				<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						
				<th>DATE</th>
				<th>NAME</th>
				<th>EMAIL</th>
				
				<th>Subject</th>
				<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<?php

						foreach ($list as $l){
					?>
			<tr>
			<td></td>
					<td><?php echo $l[6] ;?></td>
					<td><?php echo $l[1] ;?></td>
				
					<td><?php echo $l[2] ;?> </td>
					
					
					<td><?php echo $l[3] ;?> </td>
					<form action="books.php" method="POST" >
					<td><input type="text" value="<?PHP //echo //$l[0] ?>" name="id" hidden ></td>
					<td><!--<div class="bd-example"-->
  
  <a href="Consulterticket.php?id=<?php echo $l[0];?>"><button type="button" class="btn btn-primary" >View</button></a>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Respond to Ticket </h4>
        </div>
        <div class="modal-body">
		<div class="row">
		<div class="col s6">
			<table class="hoverable">
				<tr>
					<td>ID :</td>
					<td><?php echo 5; ?></td>
				</tr>
				<tr>
					<td>Name :</td>
					<td><?php echo "khaled";?></td>
				</tr>
				<tr>
					<td>EMail : </td>
					<td><?php echo "khaled.ouertani@esprit.tn";?></td>
				</tr>
				<tr>
					<td>Text :</td>
					<td><?php echo "manich khawef";?></td>
				</tr>
			</table>
		</div>
		<div class="col s6">
			<form class="form-horizontal"action="../controller/mailController.php" method="POST">
			
				<input type="hidden" value="<?php //echo $ticket->getid_ticket();?>" name="id_ticket">
				<input type="text" name="sujet" placeholder="sujet" class="form-control">
				<br>
				<input  type="text" class="form-control" name="mail" value="<?php //echo $ticket->getemail();?>">
				<br>
				<textarea class="materialize-textarea" placeholder="type message here" name="msg"></textarea>
				<button type="submit" name="action" class="btn">submit</button>	
				
			</form>
			</div>
		
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" name="action" >Send message</button>
        </div>
      </div>
    </div></div></div></td>
					<!--<td><input name="view" type="submit" class="btn btn-danger" value="Delete" /> </td>-->
					
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
