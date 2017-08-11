<?php include'../class/crud.php';?>
<?php
$cc=new crud();

if (isset($_GET['id'])){

$tickID=$cc->afficherTicket($cc->conn,$_GET['id']);}
$list2=$cc->CountTicket($cc->conn);
////////**********************/////////


						foreach ($list2 as $l2){
							$nombret= $l2[0];
						}
				if(isset($_POST['action']))
				{

				$cc->modifierTicket($cc->conn,$_GET['id_ticket']);
			exit();	}
			if (isset($_POST["ban"])){

				if($cc->banirTicket($cc->conn,$_GET['id_ticket'])){

					header("Location: admin_ticket.php?msgDelete=You successfully delete this book");
					exit();
						}


			}
?>
<?php include'header.php';?>



<div class="row">
                    <div class="col-lg-12">
<div class="alert alert-success fade in" style="margin-top:18px;">
<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">�</a>
<strong><span class="glyphicon glyphicon-ok"></span>  Success!</strong>  Ticket Viewed Data sent successfully.</div>
                        <h1 class="page-header">
                           <span class="glyphicon glyphicon-eye-open" ></span> Respond <small>: Ticket N <span class="glyphicon glyphicon-file"></span><?php echo $_GET['id'];?>
                        </ol></small>

                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="index.php">dashboard</a> / Support / Unresolved / Respond

                            </li>
                    </div>
                </div>
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
                            <a href="admin_ticket.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Tickets</span>
                                    <span class="pull-right"><i class="fa fa-eye" aria-hidden="true"></i></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
										<!------>




                </div>
				<!--row--><?php
				foreach ($tickID as $l2){?>

		<div class="row">
		<h4><strong>In need for response</strong></h4>
		<div class="col s6">
			<table class="table table-condensed table-hover table-bordered">
			<tr>
					<td>DATE of Submit</td>
					<td><?php echo $l2[6]; ?></td>
				</tr>
				<tr>
					<td>User Identification</td>
					<td><?php echo $l2[5]; ?></td>
				</tr>
				<tr>
					<td>User Name <span class="glyphicon glyphicon-user"></td>
					<td><?php echo $l2[1];?></td>
				</tr>
				<tr>
					<td>User Mail Address   <span class="glyphicon glyphicon-envelope"></span></td>
					<td><?php echo $l2[2];?></td>
				</tr>
				<tr>
					<td>Ticket Description <span class="glyphicon glyphicon-pencil"></span></td>
					<td><?php echo $l2[3];?></td>
				</tr>
				<tr>
					<td>

					<form class="form-vertical" action="Consulterticket.php" method="POST">

						<button type="submit" name="ban" class="btn btn-danger btn-block"><span class="fa fa-ban"></span> Ban</button>
					</form>
				</td>
				<td >


<a href='<?php  $_SERVER['REQUEST_URI'] ?> #targetmsg'>
						<button type="button" class="btn btn-block  btn-primary" ><span class="fa fa-envelope"></span> Répondre</button></a>
					</a>
				</td>
			</tr>

			</table>
		</div>
		<form class="form-vertical"action="../controller/mailController.php" method="POST">

				<input type="hidden" value="<?php echo $_GET['id'];?>" name="id_ticket" >
				<label id="targetmsg">Subject  <span class="glyphicon glyphicon-credit-card"></span> </label>
				<input type="text" name="sujet" placeholder="subject" class="form-control">
				<br>
				<label>Email  <span class="glyphicon glyphicon-envelope"></span> </label>
				<input  type="text" class="form-control" name="mail" value="<?php echo $l2[2];?>" placeholder="exemple@exemple.exemple">
				<br>
				<label>Body  <span class="glyphicon glyphicon-pencil"></span> </label>
				<textarea id="editor" rows="6" class="form-control" placeholder="type message here" name="msg"></textarea>
				<br>
				<button type="submit" name="action" class="btn btn-primary">Respond</button>

			</form>

		<?php }?>

        </div>




<?php include('footer.php');?>
