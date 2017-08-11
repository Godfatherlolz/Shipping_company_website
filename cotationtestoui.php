
<?php include 'header.php'; ?>
  <link href="show.css" rel="stylesheet" />
<script type= "text/javascript" src = "js/countries.js"></script>
<script type= "text/javascript" src = "js/validator.js"></script>


<script>
    console.log(Validator);
</script>

<script>$(document).ready(function () {
$("#addcolis").on("click", function () {
  var clone = $("[class^=colis]:last")
  .clone(false, false)[0].outerHTML.replace(/(\d)/g, function(a) {
    return parseInt(a) + 1
  });
  $(clone).appendTo("body");
  console.log($(clone).attr("class"));
});
});</script>

<div class="breadcum">
    <div class="container">
        <ol class="breadcrumb">
            <li>
                <a href="index.html"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                </a>
            </li>
            <li class="hidden-xs">
                <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                <a href="#">Demande de Cotation</a>
            </li>
        </ol>
        <div class="pull-right">
            <i class="livicon icon3" data-name="responsive-menu" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Demande de cotation
        </div>
    </div>
</div>
<div class="container" style="margin-top:60px;">
  <div class="panel panel-primary">
  <div class="panel-heading"><div class="text-center"><h2 style="color:white;"><strong>Demande de Cotation</strong></h2></div></div>
  <div class="panel-body" ><form>

    <h3> Cotation- Port Maritime </h3>
    <div class="row">
    <div class="col-md-6 display-no" style="margin-top:50px;" >


        <link href="show.css" rel="stylesheet" />
        <div id="one">
<lable><strong> Ce produit n'est pas dangereux.</strong></lable>
    <input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger" onclick="javascript:showDiv();">
</div>

    <script type="text/javascript">
    function showDiv() {
        div = document.getElementById('tow');
        if(div.style.display == 'block')
        div.style.display = 'none';

else
        div.style.display = "block";
    }
    </script>

    </div>
    <div class="col-md-6 display-no" >
      <div id="tow">

    <div class="col-md-3 display-no" style="display: block;">

            <div class="form-group" style="position: static;">
                <label for="input-text-1">Unité</label>
                <input type="text" class="form-control" id="input-text-1" placeholder="" disabled>
                <p class="help-block">(*)</p>
            </div>
        </div>
        <div class="col-md-3 display-no" style="display: block;">
            <div class="form-group" style="position: static;">
                <label for="input-text-2">Classe</label>
                <input type="" class="form-control" id="input-text-2" placeholder="" disabled>
                <p class="help-block">(*)</p>
            </div>
        </div></div></div>
      </div>
      <div class="row">
      <div class="col-md-12 display-no" >
        <label for="select-1"><strong>Type de Transport</strong></label>
        <select class="form-control" id="select1">
    <option value="1">Conteneur</option>
    <option value="2">Remorque</option>

  </select>
  <p class="help-block">Example block-level help text here.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 display-no" style="display: block;">
        <!---->
<div class="form-group" style="position: static;">
            <label><strong>Nbr d'unité(s)</strong></label>
            <div class="input-group spinner" data-trigger="spinner">
                <input class="form-control" type="number" min="1" step="1" style="width: 270px; " />

            </div>

        <!---->
      </div></div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
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
      <div class="col-md-3 display-no" >
        <label for="select-1"><strong>Type d'unité</strong></label>
          <select class="form-control" id="select2"  style="width: 270px; ">
            <option value="1">Tollée</option>
            <option value="1">Bachée</option>
            <option value="1"id='reefer'>Reefer</option>
            <option value="2">20'</option>
            <option value="2">40'</option>
            <option value="2">20'dry</option>
            <option value="2">40'dry</option>
            <option value="2">20'Open Top</option>
            <option value="2">40'Open Top</option>
            <option value="2">20'Flat</option>
            <option value="2">40'Flat</option>
            <option value="2">Hight Cube</option>
            <option value="2">20'Reefer</option>
            <option value="2">40'Reefer</option>
            <option value="2">20'FlexiTank</option>
          </select>
      </div>
      <div class="col-md-3 display-no" >
        <div class="form-group" style="position: static;">
                    <label><strong>Poids </strong></label>
                    <div class="input-group spinner" data-trigger="spinner">
                        <input class="form-control" type="number" min="0.1" step="0.1" style="width: 270px; "/><p>**Kg</p>

                    </div>

                <!---->
              </div>
      </div>
      <div class="col-md-3 display-no" >
        <div class="row">
          <label class="radio-inline"><strong>S'agit-il d'un Reefer?</strong></label>
            <input name="radioGroup" id="radio1" value="option1" type="radio"> Oui
            <input name="radioGroup" id="radio1" value="option1" type="radio"> Non

        </div>

        <div class="row"><div class="col-md-6 display-no" >
          <label><strong>Température</strong></label></div>
          <div class="col-md-6 display-no" >
          <div class="input-group spinner" data-trigger="spinner">
              <input class="form-control" type="number" min="-100" step="0.1" style="width: 84px; "/><p>**C</p>

          </div></div>
        </div>
      </div>
    </div><!----->
      <div class='row'>
        <div class="row">


<div class="colis1">
<div class="col md-3">
<Label> Nb Unités</Label>
    <input id="nombre1" name="rate1" type="number" /></div>
    <div class="col md-3">
    <Label> Poids </Label>
    <input name="poids1" type="text" /></div>
    <div class="col md-3">
    <Label> Type </Label>
    <input name="type1" type="text" /></div>
    <div class="col md-3">
    <Label> Gerbable ? </Label>
    <input name="gerbable1" type="checkbox" />
    </div>

</div>
</div><div class="row">

<div class="sixteen columns" id="addcolis">
    <label><i class="fa fa-plus-square"></i>Pour Ajouter Un Collis Clickez Ici. </label>
</div></div>

      </div>
      <!------>
        <div class="row">
          <div class="col-md-3 display-no" >
            <div class="form-group" style="position: static;">
                <label for="input-text-2"><strong>Adresse de Prise en Charge</strong></label>
                <input type="" class="form-control" id="input-text-2" placeholder="Adresse Exacte">
                <p class="help-block">(*)</p>
            </div>
        </div>
        <div class="col-md-3 display-no" >
          <div class="form-group" style="position: static;">
              <label for="input-text-2"><strong>Code Postal</strong></label>
              <input type="" class="form-control" id="input-text-2" placeholder="Exemple '1006'">
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

        <select name ="state" id ="state" class="form-control"></select>


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
          <input type="text" class="form-control" id="input-text-2" placeholder="Exemple 'Tunis'">
          <p class="help-block">(*)</p>

        </div>
      </div>
        </div>

            <div class="row"><div class="col-md-12 display-no" >
              <label for="input-text-2"><strong>Date de Prise en Charge</strong></label>
                <input type="text" class="form-control" id="datepicker" placeholder="Exemple '05/06/07'">


            </div></div>
            <div class="row">
              <div class="col-md-3 display-no" >
                <div class="form-group" style="position: static;">
                    <label for="input-text-2"><strong>Adresse de Livraision</strong></label>
                    <input type="" class="form-control" id="input-text-2" placeholder="Adresse Exacte">
                    <p class="help-block">(*)</p>
                </div>
            </div>
            <div class="col-md-3 display-no" >
              <div class="form-group" style="position: static;">
                  <label for="input-text-2"><strong>Code Postal</strong></label>
                  <input type="" class="form-control" id="input-text-2" placeholder="Exemple '1006'">
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

            <select id="country1" name ="country" class="form-control"></select>

            </div>
            <div class="form-group">
            <label class="col-md-6 control-label" for="Gouvernorat"><strong>Gouvernorat</strong></label>

            <select name ="state1" id ="state1" class="form-control"></select>


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
              <input type="text" class="form-control" id="input-text-2" placeholder="Exemple 'Tunis'">
              <p class="help-block">(*)</p>

            </div>
          </div>
            </div>
            <div class="row"><div class="col-md-12 display-no" >
              <label for="input-text-2"><strong>Informations supplémentaires</strong></label>
                <textarea class="form-control input-lg no-resize" rows="6" placeholder="Your comment"></textarea>


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

  </form></div>

</div>


</div>
<!--spinner-->

<!-- end of page level js -->
<?php include 'footer.php'; ?>
<!--spinner-->


<!-- end of page level js -->
