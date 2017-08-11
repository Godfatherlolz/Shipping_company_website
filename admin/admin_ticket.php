

<?php include'../class/crud.php';
include'../class/function.php'
?>
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
				<th>STATE</th>

				<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>

				<th>DATE</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>STATE</th>


				<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<?php

						foreach ($list as $l){
					?>
			<tr>

					<td><?php echo $l[6] ;?></td>
					<td><?php echo $l[1] ;?></td>

					<td><?php echo $l[2] ;?> </td>

					<td> <?php   echo shortText($l[3] , 30);?></td>
				<!--<div class="bd-example"-->



					<form action="books.php" method="POST" >

					<td><!--<div class="bd-example"-->

  <a href="Consulterticket.php?id=<?php echo $l[0];?>"><button type="button" class="btn btn-primary" ><span class="fa fa-eye"></span> View</button></a>

</td>

					<!--<td><input name="view" type="submit" class="btn btn-danger" value="Delete" /> </td>-->

					</form >



			</tr>
			       <?php
					}
					?>


					</tbody>
					</table>





















<script type="text/javascript" language="javascript" class="init">
$(document).ready(function() {
    $('#khaled').DataTable();
} );
</script>
  <?php
include('footer.php');

?>
