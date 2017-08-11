<?php include 'class/crud.php' ;?>
<?php include 'class/function.php' ;?>
<?php include 'class/ticket.php' ;?>
<?php include 'class/cot_mar.php' ;?>
<?php
if(!isset($_SESSION))
    {
        session_start();

    }
    if(!isset($_GET["id"]))
        {
          header('Location: ins.php');

        }

if(isset($_SESSION['id']))
{
  $userid=$_SESSION['id'];
}

$cc=new crud();
$liste=$cc->displayClient($cc->conn,$_SESSION['id']);
$list=$cc->display_CotM_by_idcm($cc->conn,$_GET['id']);
$list2=$cc->CountTicketId_user0($cc->conn,$_SESSION['id']);
$list3=$cc->display_CotM_Trans_M($cc->conn,$_GET['id']);
$list4=$cc->display_CotM_Col_M($cc->conn,$_GET['id']);
////////**********************/////////


						foreach ($list2 as $l2){
							$nombret= $l2[0];
						}
            if (isset($_GET['id'])){

            $tickID=$cc->afficherTicket($cc->conn,$_GET['id']);}


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
                                    <p style="color:green;"><strong>Actif--</strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Created At</td>
                                <td>
                                  <?php echo $le[16];?>
                                </td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>
                                    <a href="#" data-pk="1"  class="editable" data-title="Edit City">	<?php echo $le[9];?>,	<?php echo $le[8];?></a>
                                </td>
                            </tr>
                        </table> <?php } ?>
                    </div>


                </div>
                <div class="col-md-8"><?php foreach ($list as $l){?>
                    <ul class="nav nav-tabs ul-edit responsive">


                        <li class="active">
                            <a href="#tab-activity" data-toggle="tab">
                                <i class="livicon" data-name="mail" data-size="16" data-c="#01BC8C" data-hc="#01BC8C" data-loop="true"></i> Cotation Maritime <?php  if( $_GET['typez']=='1') echo 'Unité Complète';
                            elseif( $_GET['typez']=='2') echo 'Conventionnel';
                            elseif( $_GET['typez']=='3') echo 'Groupage';
                            elseif( $_GET['typez']=='4') echo 'Affretement';


                                ?><span class="badge"><?php echo $nombret;?></span>
                            </a>
                        </li>



                    </ul>
                    <div class="tab-content">




                        <div id="tab-activity" class="tab-pane fade in active" style="margin-top:12px;">

<div class="text-center">
                            <h3> Cotation- Port Maritime (<?php  if( $_GET['typez']=='1') echo 'Unité Complète';
                        elseif( $_GET['typez']=='2') echo 'Conventionnel';
                        elseif( $_GET['typez']=='3') echo 'Groupage';
                        elseif( $_GET['typez']=='4') echo 'Affretement';


                            ?>)<?php echo $l[0];?> </h3>
                          </div>
                            <fieldset style="margin-top:50px;"><legend for="input-text-2"><strong><h3> Informations de Danger </h3></strong></legend>
                            <div class="row">

                          <div class="col-md-7 display-no" >




                        <lable><strong> Ce produit n'est pas dangereux.</strong></lable>
                            <p> <?php if ($l[3]==0) echo "Oui"; else echo "Non";?>  </p>




                            </div>
                            <div class="col-md-5 display-no" >

<div class="col-md-2 display-no" >
                                <div class="form-group" style="position: static;">
                                    <label ><strong>Unité</strong></label>

                                    <p > <?php echo $l[4] ;?></p>
                                </div>
</div>
<div class="col-md-1 display-no" ></div>
<div class="col-md-2 display-no" >
                              <div class="form-group" style="position: static;">
                                  <label ><strong>Classe </strong></label>

                                  <p > <?php echo $l[5] ; ?></p>
                              </div></div>
                          </div>
                        </div></fieldset>

                              <fieldset><div class="row">
                                <legend for="input-text-2"><strong><h3> Informations de Transport & Incoterm</h3></strong></legend>
                                <div class='col-md-6'><div class="form-group" style="position: static;">
                                    <label ><strong>Type de Transport</strong></label>

                                    <p > <?php if($l[7]=='0' ) echo "Dépandant !";

                                else echo $l[7] ;}?></p>

                                </div></div>
                                  <div class='col-md-6'>
                                    <div class="form-group" style="position: static;">
                                        <label ><strong>Incoterm</strong></label>

                                    <p>  <?php

                             echo $l[6] ;?></p>

                                  </div>
                                    </div>

                              </div>
                              <?php  if( $_GET['typez']=='1') {
                                foreach ($list3 as $l3){
                                echo '<div class="row">
                                <div class="text-center">
                                <table class="table">
                                <thead>
                                  <tr>
                                    <th>Nombre</th>
                                    <th>Poids</th>
                                    <th>Type</th>
                              <th>Température</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>';

                              ?>

                                    <?php echo '<td><p>'?><?php echo $l3[2];?><?php echo '</td></p>'?>
                                    <?php echo '<td><p>'?><?php echo $l3[3];?><?php echo '</td></p>'?>
                                    <?php echo '<td><p>'?><?php echo $l3[4];?><?php echo '</td></p>'?>
                                    <?php echo '<td><p>'?><?php echo $l3[5];?><?php echo '</td></p>'?>
                                <?php  echo '</tr>

                                </tbody>
                              </table>
                            </div></div>' ;  ?>
                                <?php }}?>
                              </fieldset>
                              <fieldset>
                              <div class="row">
                                 <legend for="input-text-2"><strong><h3>Informations Des Colis</h3></strong></legend>
                                 <?php foreach ($list4 as $l4){ ?><div class="text-center">

                                <table class="table">
                                <thead>
                                  <tr>
                                    <th class='col-md-1'>Nombre</th>
                                    <th class='col-md-2'>Type</th>
                                    <th class='col-md-2'>Poids</th>
                                    <th class='col-md-2'>Dimension</th>
                                    <th class='col-md-2'>Gerbable</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class='col-md-1'><p><?php echo $l4[2];?></p></td>
                                    <td class='col-md-2'><p><?php echo $l4[5];?></p></td>
                                    <td class='col-md-2'><p><?php echo $l4[3];?></p></td>
                                    <td class='col-md-2'><p><?php echo $l4[4];?></p></td>
                                    <td class='col-md-2'><p><?php if ($l4[6]=0) echo 'Non' ; else echo ' Oui';?></p></td>
                                  </tr>

                                </tbody>
                              </table>
                                </div></div>
                                <?php }?>
                              </fieldset>
                          <!----->

                              <!------>
                              <fieldset>

                              <div class="row"><?php foreach ($list as $l5){?>
                                 <legend for="input-text-2"><strong><h3>Informations De Prise en charge</h3></strong></legend>
                                <div class="col-md-6 display-no" >
                                  <div class="form-group">
                                      <label ><strong>Adresse de Prise en charge</strong></label>

                                      <p > <?php echo $l5[11];?></p>
                                  </div>
                              </div>
                              <div class="col-md-6 display-no" >
                                <div class="form-group">
                                  <label for="input-text-2"><strong>Code Postal</strong></label>

                                  <p > <?php echo $l5[12]; ?></p>
                                </div>
                            </div>


                        </div>

                    </fieldset>

                                    <fieldset><div class="row">
                                      <legend for="input-text-2"><strong><h3>Détails de Prise en charge & Livraison</h3></strong></legend>
                                      <div class="col-md-6 display-no" >
                                        <div class="form-group">
                                            <label ><strong>Date précise de Prise en charge</strong></label>

                                            <p >  <?php echo $l5[8]; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 display-no" >
                                      <div class="form-group">
                                          <label ><strong>Date précise de Livraison</strong></label>

                                          <p >  <?php echo $l5[9]; ?></p>
                                      </div>
                                  </div>
                                    </fieldset>

                                    <fieldset>
                                    <div class="row">
                                       <legend for="input-text-2"><strong><h3>Informations De Livraison</h3></strong></legend>
                                      <div class="col-md-6 display-no" >
                                        <div class="form-group">
                                            <label ><strong>Adresse de Livraision</strong></label>

                                            <p >  <?php echo $l5[13]; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 display-no" >
                                      <div class="form-group">
                                        <label for="input-text-2"><strong>Code Postal</strong></label>

                                        <p >  <?php echo $l5[14]; ?></p>
                                      </div>
                                  </div>


                              </div>
                            </fieldset>
                                    <div class="row" style="margin-bottom:50px;"><fieldset>
                                      <legend for="input-text-2"><strong><h3>Informations supplémentaires</h3></strong></legend>
                                        <p > <?php echo $l5[10];} ?></p>
</fieldset>

                                    </div></div></div>

                          </div>
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
