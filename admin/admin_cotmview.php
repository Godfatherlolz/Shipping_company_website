<?php include '../class/crud.php' ;?>
<?php include '../class/function.php' ;?>
<?php include '../class/ticket.php' ;?>
<?php include '../class/cot_mar.php' ;?>
<?php
if(!isset($_SESSION))
    {
        session_start();

    }

    date_default_timezone_set('Africa/Tunis');
    $date = date('m/d/Y h:i:s a', time());
if(isset($_SESSION['id']))
{
  $userid=$_SESSION['id'];
}

$cc=new crud();

$list=$cc->display_CotM_by_idcm($cc->conn,$_GET['id']);

foreach ($list as $l9){
  $clientt= $l9[1];
  $liste=$cc->displayClient($cc->conn,$clientt);
  foreach ($liste as $l98){
    $clientmail= $l98[1];
  echo $clientmail;
  }
}


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

<div class="container" style="margin-top:50px;">
  <div class='col-md-11'>
  <div class='row'><?php foreach ($liste as $l77){?>
    <div class='col-md-8'><p> Utilisateur : <?php echo $l77[7] ; ?> <?php echo $l77[6] ; ?></p><br>
      <p><?php echo $date;}?> à Tunis,Tunisie. </p></div>
    <div class='col-md-4'><img src="../images/logo.png" class="img-responsive" ></div>
  </div><hr>
    <div  class="row ">
        <div class="col-md-12">
            <div class="row ">

              <?php foreach ($list as $l){?>

                    <div class="tab-content">




                        <div id="tab-activity" class="tab-pane fade in active" style="margin-top:12px;">

<div class="text-center">
                            <h2><strong> Cotation- Port Maritime (<?php  if( $_GET['typez']=='1') echo 'Unité Complète';
                        elseif( $_GET['typez']=='2') echo 'Conventionnel';
                        elseif( $_GET['typez']=='3') echo 'Groupage';
                        elseif( $_GET['typez']=='4') echo 'Affretement';


                            ?>)<?php echo $l[0];?> </strong></h2>
                          </div>
                            <fieldset style="margin-top:80px;"><legend for="input-text-2"><strong><h3> Informations de Danger </h3></strong></legend>
                            <div class="row">

                          <div class="col-md-6 display-no" >




                        <lable><strong> Ce produit n'est pas dangereux.</strong></lable>
                            <p> <?php if ($l[3]==0) echo "Oui"; else echo "Non";?>  </p>




                          </div>
                            <div class="col-md-6 display-no" >

<div class="col-md-3 display-no" >
                                <div class="form-group" style="position: static;">
                                    <label ><strong>Unité</strong></label>

                                    <p > <?php echo $l[4] ;?></p>
                                </div>
</div>

<div class="col-md-3 display-no" >
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
                                 <?php foreach ($list4 as $l4){ ?>

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
                              </div>
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
                            </fieldset><hr>
                                    <div class="row" style="margin-bottom:50px;"><div class='col-md-6'><fieldset>
                                      <legend for="input-text-2"><h3><strong>Informations supplémentaires</strong></h3></legend>
                                        <p > <?php echo $l5[10]; }?></p>
</fieldset>

                                    </div>
                                    <div class="col-md-6"> <fieldset> <legend for="input-text-2"><h3><strong>Réponse de la Direction</strong></h3></legend>
                                      <form action="../Controller/mailController_cota.php?mail=<?php echo $clientmail ;?>&id_cota=<?php echo $_GET['id'] ;?>" method="POST" >
                                  <div class="col-md-6">
                                    <button type="submit" class="btn btn-success" >Accepter</button>
                                  </div>  </form><form action="admin_cotmview.php?mail=<?php echo $clientmail ;?>" method="POST" >
                                  <div class="col-md-6">
                                    <button type="submit" class="btn btn-danger" >Refuser</button>
                                  </div>
                                      <!--<td><input name="view" type="submit" class="btn btn-danger" value="Delete" /> </td>-->

                                    </form ></fieldset>
                                    </div>
                                  </div></div></div>

                          </div>

                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-1'>
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
