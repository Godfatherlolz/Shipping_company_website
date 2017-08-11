<?php include 'class/crud.php' ;?>
<?php include 'class/function.php' ;?>
<?php include 'class/ticket.php' ;?>
<?php
if(!isset($_SESSION))
    {
        session_start();

    }

if(isset($_SESSION['id']))
{
  $userid=$_SESSION['id'];
}

$cc=new crud();
$liste=$cc->displayClient($cc->conn,$_SESSION['id']);
$list=$cc->displayTicketId_user($cc->conn,$_SESSION['id']);
$list2=$cc->CountTicketId_user($cc->conn,$_SESSION['id']);
////////**********************/////////


						foreach ($list2 as $l2){
							$nombret= $l2[0];
						}


?>
<!--end of page level css-->

<?php
require_once 'header.php';
?>
<div class="breadcum">
    <div class="container">
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                </a>
            </li>
            <li class="hidden-xs">
                <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                <a href="#">Profile </a>
            </li>
        </ol>
        <div class="pull-right">
            <i class="livicon icon3" data-name="user" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Profile
        </div>
    </div>
</div>
<div class="container" style="margin-top:50px;">
    <div  class="row ">
        <div class="col-md-12">
            <div class="row ">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="text-center">

                                <div class="fileinput-new thumbnail">	<?php foreach ($liste as $le){
																	if (($le[7]=="Khaled" && $le[6]=="Ouertani")||($le[7]=="Mélik" && $le[6]=="Zarkouna" )){ echo '	<img src="images/profile/gangsta.png" class="img-rounded" alt="Cinque Terre" width="218px" height="103px">'; }
																else echo '<img src="images/profile/société.png" class="img-rounded" alt="Cinque Terre" width="218px" height="103px">' ;?>
																		<!--img src="images/profile/société.png" class="img-rounded" alt="Cinque Terre" width="218px" height="103px"-->
																			<!--img src="images/profile/simple_user.png" class="img-rounded" alt="Cinque Terre" width="218px" height="103px"-->
																																		<?php }?>
                                </div>


                        </div>
                    </div>
                    <div class="table-responsive">	<?php foreach ($liste as $le){?>
                        <table class="table  table-striped" id="users">

                            <tr>
                                <td>Utilisateur</td>
                                <td>
                                    <a href="#" data-pk="1" class="editable" data-title="Edit User Name"><?php echo $le[7].' '.$le[6] ;?></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <a href="#" data-pk="1" class="editable" data-title="Edit E-mail">
                                        <?php echo $le[1];?>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Téléphone Mobile
                                </td>
                                <td>
                                    <a href="#" data-pk="1" class="editable" data-title="Edit Phone Number">
                                        (+216) <?php echo $le[14];?>
                                    </a>
                                </td>
                            </tr>
														<tr>
                                <td>
                                    Téléphone Fix
                                </td>
                                <td>
                                    <a href="#" data-pk="1" class="editable" data-title="Edit Phone Number">
                                         <?php echo $le[13];?>
                                    </a>
                                </td>
                            </tr>
														<tr>
																<td>
																		Fax
																</td>
																<td>
																		<a href="#" data-pk="1" class="editable" data-title="Edit Phone Number">
																				<?php echo $le[13];?>
																		</a>
																</td>
														</tr>
                            <tr>
                                <td>Address</td>
                                <td>
                                    <a href="#" data-pk="1" class="editable" data-title="Edit Address">
                                        <?php echo $le[10];?>,	<?php echo $le[11];?>	.
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <a href="#" id="status" data-type="select" data-pk="1" data-value="1" data-title="Status"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Created At</td>
                                <td>
                                  <?php echo $le[9];?>,	<?php echo $le[8];?>
                                </td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>
                                    <a href="#" data-pk="1"  class="editable" data-title="Edit City">	<?php echo $le[16];?></a>
                                </td>
                            </tr>
                        </table> <?php } ?>
                    </div>


                </div>
                <div class="col-md-8">
                    <ul class="nav nav-tabs ul-edit responsive">
                        <li class="active">
                            <a href="#tab-activity" data-toggle="tab">
                                <i class="livicon" data-name="comments" data-size="16" data-c="#01BC8C" data-hc="#01BC8C" data-loop="true"></i> Cotations
                            </a>
                        </li>

                        <li>
                            <a href="#tab-messages" data-toggle="tab">
                                <i class="livicon" data-name="mail" data-size="16" data-c="#01BC8C" data-hc="#01BC8C" data-loop="true"></i> Tickets <span class="badge"><?php echo $nombret;?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-change-pwd" data-toggle="tab">
                                <i class="livicon" data-name="key" data-size="16" data-c="#01BC8C" data-hc="#01BC8C" data-loop="true"></i> Change Password
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-activity" class="tab-pane fade in active">

                        </div>
                        <div id="tab-change-pwd" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12 pd-top">
                                    <form action="#" class="form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="inputpassword" class="col-md-3 control-label">
                                                    Password
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                        </span>
                                                        <input type="password" placeholder="Password" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputnumber" class="col-md-3 control-label">
                                                    Confirm Password
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                        </span>
                                                        <input type="password" placeholder="Password" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-actions">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                &nbsp;
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                                &nbsp;
                                                <input type="reset" class="btn btn-default hidden-xs" value="Reset"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div id="tab-messages" class="tab-pane fade in" style="margin-top:12px;">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<?php
require_once('footer.php');
?>
<script src="back/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="back/js/bootstrap.min.js" type="text/javascript"></script>

<script  src="back/vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
<script src="back/vendors/x-editable/jquery.mockjax.js" type="text/javascript"></script>
<script src=".back/vendors/x-editable/bootstrap-editable.js" type="text/javascript"></script>
<script type="text/javascript" src="back/vendors/magnifier/imgmagnify.js"></script>
<script src="back/vendors/iCheck/icheck.js"></script>
<script src="back/js/pages/user_profile.js" type="text/javascript"></script>

<script src="back/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
<script src="back/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
<script src="back/js/josh.js" type="text/javascript"></script>
<script src="back/js/metisMenu.js" type="text/javascript"></script>
<script src="back/vendors/holder-master/holder.js" type="text/javascript"></script>
