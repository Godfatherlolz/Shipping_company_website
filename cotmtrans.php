<?php include 'class/crud.php' ;?>
<?php include 'class/function.php' ;?>
<?php include 'class/trans_mar.php' ;?>


<?php


if(!isset($_SESSION))
   {
       session_start();

   }

$cc=new crud();


if(isset($_POST['submit'])){
$idc=$_GET['idcm'];
$nbr=$_POST['nombre'];
$poids=$_POST["poids"];
$type=$_POST["type"];
$temperature=$_POST["temperature"];
$trans= new trans_mar ($idc,$nbr,$poids,$type,$temperature);
echo $nbr ;
$cc->insertTrans_m($cc->conn,$trans);



    }










?>
<?php include "headercota.php" ?>
<link href="show.css" rel="stylesheet" />
<script type= "text/javascript" src = "js/countries.js"></script>
<script type= "text/javascript" src = "js/validator.js"></script>


<script>
  console.log(Validator);
</script>


<div class="container">
<div class='row'>
  <fieldset>
    <legend class="scheduler-border"><h3>Informations concernants vos Collis.</h3></legend>
  <table class="table">
  <thead>
    <tr>
      <th>Num Unités</th>
      <th>Poids</th>
      <th>Type</th>
<th>Température</th>
    </tr>
  </thead>
  <tbody>

    <tr class="transport1"><form  action="<?php $_SERVER['REQUEST_URI']  ?>" method="POST">
      <td> <input class="form-control" id="nombre1" name="nombre1" type="number"  min="1" step="1  "/></td>
      <td>  <input class="form-control"  id="poids1" name="poids1" type="text" /></td>
      <td>
        <select class="form-control" id="type1" name="type1"><?php if(($_GET['select'])=='2' ) {?>

          <option value="vingt">vingt</option>
          <option value="Quarante">Quarante</option>
          <option value="vingt dry">vingt dry</option>
          <option value="Quarante dry">Quarante dry</option>
          <option value="vingt Open Top">vingt Open Top</option>
          <option value="Quarante Open Top">QuaranteOpen Top</option>
          <option value="vingt Flat">vingtFlat</option>
          <option value="QuaranteFlat">QuaranteFlat</option>
          <option value="Hight Cube">Hight Cube</option>
          <option value="Vingt Reefer">VingtReefer</option>
          <option value="Quarante Reefer">QuaranteReefer</option>
          <option value="VingtFlexiTank">vingtFlexiTank</option> ;<?php } else{ ?><option value="Tollée">Tollée</option>
            <option value="Bachée">Bachée</option>
            <option value="Reefer">Reefer</option>;<?php } ?>
        </select>
      </td>
      <td>  <input class="form-control"  id="temperature1" name="temperature1" type="number"   min="-40" step="0.5  "/></td>
      <td>  <input class="form-control"  id="submit1" name="submit1" type="submit"    /></td></form>
    </tr>

  </tbody>
</table>
  <div class="row">
<div class="col-md-10">
  <div class="sixteen columns" id="addtransport">
      <label><i class="fa fa-plus-square"></i>Pour Ajouter Un Collis Clickez Ici. </label>
  </div></div>
  <div class="col-md-2"><button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button></div></div>
</fieldset>

</div></div>
<script>jQuery.noConflict();
$(document).ready(function () {
$("#addtransport").on("click", function () {
  var clone = $("[class^=transport]:last")
  .clone(false, false)[0].outerHTML.replace(/(\d)/g, function(a) {
    return parseInt(a) + 1
  });
  $(clone).appendTo('table');

  console.log($(clone).attr("class"));
});
});</script>
