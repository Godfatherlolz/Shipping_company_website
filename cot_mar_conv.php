<?php include 'class/crud.php' ;?>
<?php include 'class/function.php' ;?>
<?php include 'class/cot_mar.php' ;?>

<?php include 'class/col_mar.php' ;?>


<?php
date_default_timezone_set('Africa/Tunis');
$date = date('m/d/Y h:i:s a', time());

if(!isset($_SESSION))
    {
        session_start();

    }
    if(!isset($_SESSION["id"]))
        {
          header('Location: ins.php');

        }



$cc=new crud();


if((isset($_POST['submit']))){



  if (isset($_POST['danger']))
    {
    $danger=0;
    $un="N/A";
    $classe="N/A";
    }
  else
    {
    $danger=0;
    $un=$_POST['un'];
    $classe=$_POST['classe'];
    }


$idcm=rand();
$id_user=$_SESSION['id'];
$typecota=2;


$transport=0;

$incoterm=$_POST['incoterm'];


$prise_charge=$_POST['date_prise_charge'];
$livraison=$_POST['date_livraison'];

$adresse_prise_charge=$_POST['adresse_prise_charge'].$_POST['country'].$_POST['gouv'].$_POST['ville_prise_charge'];
$adresse_livraison=$_POST['adresse_livraison'].$_POST['country1'].$_POST['gouv2'].$_POST['ville_livraison'];

$code_postal_charge=$_POST['code_postal_charge'];
$code_postal_livraison=$_POST['code_postal_livraison'];

$info=$_POST['info'];
$state=1;





$cota=new cot_mar($idcm,$id_user,$typecota,$danger,$un,$classe,$incoterm,$transport,$prise_charge,$livraison,$info,$adresse_prise_charge,$code_postal_charge,$adresse_livraison,$code_postal_livraison,$state);
$cc->insert_Cot_M_1($cc->conn,$cota);

sleep(3);
$typecc='N/A';
$idcc11=$idcm;
$nbrc11=$_POST['nombrec1'];
$poidsc11=$_POST['poidsc1'];
$dimensionc11=$_POST['dimension1'];

if(!isset($_POST['gerbablec1'])) {
$temperaturec11=0;
}
else
{
$temperaturec11=1;
}

$col_mar=new col_mar ($idcc11,$nbrc11,$poidsc11,$dimensionc11,$typecc,$temperaturec11);

$cc->insertCol_m($cc->conn,$col_mar);

if((isset($_POST['nombrec2']))&&(!empty($_POST['nombrec2']))){
  $idcc22=$idcm;
  $nbrc22=$_POST['nombrec2'];
  $poidsc22=$_POST['poidsc2'];
  $dimensionc22=$_POST['dimension2'];

  if(!isset($_POST['gerbablec2'])) {
  $temperaturec22=0;
  }
  else
  {
  $temperaturec22=1;
  }

  $col_mar2=new col_mar ($idcc22,$nbrc22,$poidsc22,$dimensionc22,$typecc,$temperaturec22);

  $cc->insertCol_m($cc->conn,$col_mar2);
}
if(isset($_POST['nombrec3'])&&(!empty($_POST['nombrec3']))){
  $idcc33=$idcm;
  $nbrc33=$_POST['nombrec3'];
  $poidsc33=$_POST['poidsc3'];
  $dimensionc33=$_POST['dimension3'];

  if(!isset($_POST['gerbablec3'])) {
  $temperaturec33=0;
  }
  else
  {
  $temperaturec33=1;
  }

  $col_mar3=new col_mar ($idcc33,$nbrc33,$poidsc33,$dimensionc33,$typecc,$temperaturec33);

  $cc->insertCol_m($cc->conn,$col_mar3);
}

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


<div class="panel panel-primary">
<div class="panel-heading"><div class="text-center"><h2 style="color:white;"><strong>Cotation- Transport Maritime ( Conventionnel)</strong></h2></div></div>
<div class="panel-body" ><form action="cot_mar_conv.php" method="POST">

<div class='row'>
  <div class='col-md-8'><p> Utilisateur : <?php echo $_SESSION['prenom'] ; ?> <?php echo $_SESSION['nom'] ; ?></p><br>
    <p><?php echo $date;?> à Tunis,Tunisie. </p></div>
  <div class='col-md-4'><img src="images/logo.png" class="img-responsive" ></div>
</div><hr>
<div class='row'>
<div class='text-center'>
<h3>Cotation- Transport Maritime ( Conventionnel )</h3>
  <!---remoreque--->
</div></div><hr>
  <div class='row'>

    <label ><h3>Incoterm & Details marchandise</h3></label>
    <!---remoreque--->
 </div>
  <div class="row">
  <div class="col-md-6 display-no" style="margin-top:50px;" >


      <link href="show.css" rel="stylesheet" />
      <div id="one" class='text-left'>
<lable><strong> Ce produit n'est pas dangereux.</strong></lable>
  <input class="form-control" id='gerbable1' type="checkbox"  value="Yes" name="danger" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger" onclick="javascript:showDiv();">
</div>



  <script type="text/javascript">
  function showDiv3() {
  div2 = document.getElementById('transport2');
      div = document.getElementById('transport3');
        div3 = document.getElementById('transport1');


      if((div.style.display == 'block')&&(div2.style.display == 'block')&&(div3.style.display == 'block')){
      div.style.display = 'none';
        div2.style.display = 'none';
          div3.style.display = 'none';

}
else {
      div.style.display = "block";
    div2.style.display = "block";
    div3.style.display = "block";


}
  }
  </script>
  <script type="text/javascript">
  function showDiv() {

      div = document.getElementById('tow');



      if(div.style.display == 'block'){
      div.style.display = 'none';


}
else {
      div.style.display = "block";



}
  }
  </script>

  </div>
  <div class="col-md-6 display-no" >
    <div id="tow">

  <div class="col-md-3 display-no" style="display: block;">

          <div class="form-group" style="position: static;">
              <label for="input-text-1">UN</label>
              <input type="text" class="form-control" id="input-text-1" name="un" placeholder="UN" >
              <p class="help-block">(*)</p>
          </div>
      </div>
      <div class="col-md-3 display-no" style="display: block;">
          <div class="form-group" style="position: static;">
              <label for="input-text-2">Classe</label>
              <input type="" class="form-control" id="input-text-2" name="classe" placeholder="Classe" >
              <p class="help-block">(*)</p>
          </div>
      </div></div></div>
    </div>
    <div class='row'>
      <div class='col-md-12'>
        <div class="form-group" style="position: static;">
<label for="input-text-2"><strong>Incoterm</strong></label>
       <select class="form-control"  name="incoterm">
         <option value="EXW">EXW</option>
    <option value="FCA">FCA</option>
	<option value="CPT">CPT</option>
	<option value="CIP">CIP</option>
	<option value="DAT">DAT</option>
	<option value="DAP">DAP</option>
	<option value="DDP">DDP</option>
	<option value="FAS">FAS</option>
	<option value="FOB">FOB</option>
	<option value="CFR">CFR</option>
	<option value="CIF">CIF</option>
       </select>
</div> </div>
    </div>
    <hr>

 <div class='row'>

   <label ><h3>Informations à propos de vos Colis</h3></label>
   <!---remoreque--->
</div>
    <div class="row">
      <div class="colis1">
        <div class='col-md-3'>
          <div class="form-group" style="position: static;">
              <label for="input-text-2"><strong>Nombre de Colis</strong></label>
      <input class="form-control" id="nombre1" name="nombrec1" type="number"  min="1" step="1  " required />
    </div>
   </div>
      <div class='col-md-3'>
        <div class="form-group" style="position: static;">
            <label for="input-text-2"><strong>Poids</strong></label>
         <input class="form-control"  id="poids1" name="poidsc1" type="text" required />
       </div>
      </div>
         <div class='col-md-3'>
           <div class="form-group" style="position: static;">
             <label for="input-text-2"><strong>Dimension (L*l*h)</strong></label>
       <input class="form-control"  id="type1" name="dimension1" type="text" required />
     </div>
    </div>
       <div class='col-md-3'>
         <div class="form-group" style="position: static;">
           <label for="input-text-2"><strong>Gerbable ?</strong></label>
       <input class="form-control"  id="gerbable1" name="gerbablec1" type="checkbox" value="1" />
     </div>
    </div>   </div>
      </div>

      <div class="row">
        <div class="colis1">
          <div class='col-md-3'>
            <div class="form-group" style="position: static;">
        <input class="form-control" id="nombre1" name="nombrec2" type="number"  min="1" step="1  "/>
      </div>
     </div>
        <div class='col-md-3'>
          <div class="form-group" style="position: static;">
           <input class="form-control"  id="poids1" name="poidsc2" type="text" />
         </div>
        </div>
           <div class='col-md-3'>
             <div class="form-group" style="position: static;">
         <input class="form-control"  id="type1" name="dimension2" type="text" />
       </div>
      </div>
         <div class='col-md-3'>
           <div class="form-group" style="position: static;">
         <input class="form-control"  id="gerbable1" name="gerbablec2" type="checkbox" />
       </div>
      </div>   </div>
        </div>

        <div class="row">
          <div class="colis1">
            <div class='col-md-3'>
              <div class="form-group" style="position: static;">
          <input class="form-control" id="nombre1" name="nombrec3" type="number"  min="1" step="1  "/>
        </div>
       </div>
          <div class='col-md-3'>
            <div class="form-group" style="position: static;">
             <input class="form-control"  id="poids1" name="poidsc3" type="text" />
           </div>
          </div>
             <div class='col-md-3'>
               <div class="form-group" style="position: static;">
           <input class="form-control"  id="type1" name="dimension3" type="text" />
         </div>
        </div>
           <div class='col-md-3'>
             <div class="form-group" style="position: static;">
           <input class="form-control"  id="gerbable1" name="gerbablec3" type="checkbox" />
         </div>
        </div>   </div>
          </div>
          <div class='row'>

            <label ><h3><srong>Informations d' expedition</strong></h3></label>
            <!---remoreque--->
         </div>
          <div class='row'>

            <label ><h3>Informations à propos de la Prise en Charge</h3></label>
            <!---remoreque--->
         </div>
    <!------>
      <div class="row">
        <div class="col-md-3 display-no" >
          <div class="form-group" style="position: static;">
              <label for="input-text-2"><strong>Adresse de Prise en Charge</strong></label>
              <input type="" class="form-control" name="adresse_prise_charge" id="input-text-2" placeholder="Adresse Exacte">
              <p class="help-block">(*)</p>
          </div>
      </div>
      <div class="col-md-3 display-no" >
        <div class="form-group" style="position: static;">
            <label for="input-text-2"><strong>Code Postal</strong></label>
            <input type="" class="form-control" name="code_postal_charge" id="input-text-2" placeholder="Exemple '1006'">
            <p class="help-block">(*)</p>
        </div>
    </div>
    <script language="javascript">
    populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
    populateCountries("country2");
    populateCountries("country2");
</script>
    <div class="col-md-3 display-no" >
      <div class="form-group">
      <label class="col-md-6 control-label" for="Pays"><strong>Pays</strong></label>

      <select id="country" name ="country" class="form-control"></select>

      </div>
      <div class="form-group">
      <label class="col-md-6 control-label" for="Gouvernorat"><strong>Gouvernorat</strong></label>

      <select name ="gouv" id ="state" class="form-control"></select>


      </div>

          <script language="javascript">
          populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
          populateCountries("country2");
          populateCountries("country2");
          </script>
    </div>
    <div class="col-md-3 display-no" >
      <div class="form-group" style="position: static;">
        <label for="input-text-2"><strong>Ville</strong></label>
        <input type="text" class="form-control" name="ville_prise_charge" id="input-text-2" placeholder="Exemple 'Tunis'">
        <p class="help-block">(*)</p>

      </div>
    </div>
      </div>

          <div class="row"><div class="col-md-12 display-no" >
            <label for="input-text-2"><strong>Date de Prise en Charge</strong></label>
              <input type="date" class="form-control" name="date_prise_charge" id="datepicker" placeholder="Exemple '05/06/07'">


          </div></div>
          <div class='row'>

            <label ><h3>Informations de Livraison</h3></label>
            <!---remoreque--->
         </div>
          <div class="row">
            <div class="col-md-3 display-no" >
              <div class="form-group" style="position: static;">
                  <label for="input-text-2"><strong>Adresse de Livraision</strong></label>
                  <input type="" class="form-control" name="adresse_livraison" id="input-text-2" placeholder="Adresse Exacte">
                  <p class="help-block">(*)</p>
              </div>
          </div>
          <div class="col-md-3 display-no" >
            <div class="form-group" style="position: static;">
                <label for="input-text-2"><strong>Code Postal</strong></label>
                <input type="" class="form-control" name="code_postal_livraison" id="input-text-2" placeholder="Exemple '1006'">
                <p class="help-block">(*)</p>
            </div>
        </div>
        <script language="javascript">
        populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
        populateCountries("country2");
        populateCountries("country2");
    </script>
        <div class="col-md-3 display-no" >
          <div class="form-group">
          <label class="col-md-6 control-label" for="Pays"><strong>Pays</strong></label>

          <select id="country1" name ="country1" class="form-control"></select>

          </div>
          <div class="form-group">
          <label class="col-md-6 control-label" for="Gouvernorat"><strong>Gouvernorat</strong></label>

          <select name ="gouv2" id ="state1" class="form-control"></select>


          </div>

              <script language="javascript">
              populateCountries("country1", "state1"); // first parameter is id of country drop-down and second parameter is id of state drop-down
              populateCountries("country3");
              populateCountries("country3");
              </script>
        </div>
        <div class="col-md-3 display-no" >
          <div class="form-group" style="position: static;">
            <label for="input-text-2"><strong>Ville</strong></label>
            <input type="text" class="form-control" name="ville_livraison" id="input-text-2" placeholder="Exemple 'Tunis'">
            <p class="help-block">(*)</p>

          </div>
        </div>
          </div>
          <div class="row"><div class="col-md-12 display-no" >
            <label for="input-text-2"><strong>Date de Livraison</strong></label>
              <input type="date" class="form-control" name="date_livraison" id="datepicker" placeholder="Exemple '05/06/07'">


          </div></div>
          <div class="row"><div class="col-md-12 display-no" >
            <label for="input-text-2"><strong>Informations supplémentaires</strong></label>
              <textarea class="form-control input-lg no-resize" name="info" rows="6" placeholder="Your comment"></textarea>


          </div></div><div class="row">

          <script type="text/javascript">
<!--
  function toggle_visibility(id) {
     var e = document.getElementById(id);
     if(e.style.display == 'block')
        e.style.display = 'none';
     else
        e.style.display = 'block';
  }
//-->
</script>
</div>
<button type="submit" name ="submit" class="btn btn-primary">Valider</button>
</form></div>

</div> <hr>
<!--div class="colis1">
  <div class="container">
  <div class="row">



  <div class="col-md-3">    <div class="form-group" style="position: static;">
  <Label> Nb Unités</Label><div class="input-group spinner" data-trigger="spinner">
     <input class="form-control" id="nombre1" name="nombre1" type="number"  min="0.1" step="0.1" style="width: 270px; "/><p>**</p>
  </div></div>



    </div>
      <div class="col-md-3">
      <Label> Poids </Label>
      <input class="form-control" name="poids1" type="text" style="width: 270px; "/></div>
      <div class="col-md-3">
      <Label> Type </Label>
      <input class="form-control" name="type1" type="text" style="width: 270px; " /></div>
      <div class="col-md-3">
      <Label> Gerbable ? </Label>
      <input class="form-control" name="gerbable1" type="checkbox" style="width: 270px; "/>
      </div>

  </div>
</div--></div>

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
<script>
$("#select1").change(function() {
if ($(this).data('options') == undefined) {
/*Taking an array of all options-2 and kind of embedding it on the select1*/
$(this).data('options', $('#select2 option').clone());
}
var id = $(this).val();
var options = $(this).data('options').filter('[value=' + id + ']');
$('#select2').html(options);
});
</script>
</body>
</html>
