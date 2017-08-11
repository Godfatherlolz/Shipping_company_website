
<?php include '../class/function.php' ;?>
<?php include '../class/cot_mar.php' ;?>
<?php include'../class/crud.php';?>
<?php
session_start();
if(!isset($_SESSION['showperpage'])){
	$_SESSION['showperpage']=10;



}

$cc=new crud();

////////**********************/////////



$listc=$cc->display_CotM_All_and_state($cc->conn,0);

?>
<?php include'header.php';?>

	<div class="row">
  <div class="col-lg-12">


                        <h1 class="page-header">
                          Cotation Maritime <small></small>

                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / Cotation

                            </li>
                        </ol>
                    </div>
                </div>

    <!-- /.row -->

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div>Demandes accéptées</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>
                <!-- /.row -->









									<table id="dellaa" class="display" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th></th>
											<th>Type</th>
									<th>NAME</th>

<th> Date </th>
									<th></th>
									<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>

										</tr>
									</tfoot>
									<tbody>
										<?php

											foreach ($listc as $lc){
										?>
								<tr>
								<td></td>


										<td>
													<p><?php  if( $lc[2]=='1') echo 'Transport Maritime-Unité Complète';
											elseif( $lc[2]=='2') echo 'Transport Maritime-Conventionnel';
											elseif( $lc[2]=='3') echo 'Transport Maritime-Groupage';
											elseif( $lc[2]=='4') echo 'Transport Maritime-Affretement';


													?></p></td>
													<td> <?php echo $lc[2];?></td>
										<td> <?php echo $lc[8];?></td>

										<form action="books.php" method="POST" >
										<td><input type="text" value="<?PHP //echo //$l[0] ?>" name="id" hidden ></td>
										<td><!--<div class="bd-example"-->

					<a href="admin_cotmview.php?id=<?php echo $lc[0];?>&typez=<?php echo $lc[2];?>"><button type="button" class="btn btn-primary" >View</button></a>
					</td>
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
