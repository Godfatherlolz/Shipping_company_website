<?php include "header.php"; ?>
<script type= "text/javascript" src = "js/countries.js"></script>
<script type= "text/javascript" src = "js/validator.js"></script>
<script>
    console.log(Validator);
</script>

<!-- Breadcrumb Section Start -->
<div class="breadcum">
    <div class="container">
        <ol class="breadcrumb">
            <li>
                <a href="index.html"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                </a>
            </li>
            <li class="hidden-xs">
                <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                <a href="#">Inscription</a>
            </li>
        </ol>
        <div class="pull-right">
            <i class="livicon icon3" data-name="users" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Inscription
        </div>
    </div>
</div>
<!-- //Breadcrumb Section End-->
<!-- Container Section Start -->
<div class="container">

<div class="row">
<div class="col-md-6">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend> Information Compagnie </legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nom société">Nom société</label>  
  <div class="col-md-5">
  <input id="Nom société" name="Nom société" type="text" placeholder="Nom société" class="form-control input-md" required="">
    
  </div>

</div>

  <hr>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Adresse">Adresse</label>  
  <div class="col-md-8">
  <input id="Adresse" name="Adresse" type="text" placeholder="Adresse" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="Ville">Ville</label>  
  <div class="col-md-4">
  <input id="Ville" name="Ville" type="text" placeholder="Ville" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Code postal">Code postal</label>  
  <div class="col-md-2">
  <input id="Code postal" name="Code postal" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
<label class="col-md-4 control-label" for="Pays">Pays</label>  
<div class="col-md-4">
<select id="country" name ="country" class="form-control"></select>
 </div>
</div>
<div class="form-group">
<label class="col-md-4 control-label" for="Gouvernorat">Gouvernorat</label>  
<div class="col-md-4">
<select name ="state" id ="state" class="form-control"></select> 

 </div>
</div>

    <script language="javascript">
    populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
    populateCountries("country2");
    populateCountries("country2");
</script>
</fieldset>
</form>
</div>
<div class="col-md-6">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Information utilisateurs</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Civilité">Civilité</label>
  <div class="col-md-4">
    <select id="Civilité" name="Civilité" class="form-control">
      <option value="">Monsieur</option>
      <option value="">Madame</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Prénom">Prénom</label>  
  <div class="col-md-4">
  <input id="Prénom" name="Prénom" type="text" placeholder="Prénom" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nom">Nom</label>  
  <div class="col-md-4">
  <input id="Nom" name="Nom" type="text" placeholder="Nom" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Téléphone fixe">Téléphone fixe</label>  
  <div class="col-md-4">
  <input id="Téléphone fixe" name="Téléphone fixe" type="text" placeholder="Téléphone fixe" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Téléphone portable">Téléphone portable</label>  
  <div class="col-md-4">
  <input id="Téléphone portable" name="Téléphone portable" type="text" placeholder="Téléphone portable" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Fax">Fax</label>  
  <div class="col-md-4">
  <input id="Fax" name="Fax" type="text" placeholder="Fax" class="form-control input-md">
    
  </div>
</div>

</fieldset>
</form>

</div>
</div>
<div class="row">
<div class="col-md-6">

</div>
<div class="col-md-6">
<form class="form-horizontal">
<fieldset>


<legend> Configuration compte </legend>
<div class="form-group">
    <label for="inputEmail" class="control-label">Identifiant (email)</label>   
    <input type="email" class="form-control" id="inputEmail" placeholIdentifiant (email)der="Email" data-error="Bruh, that email address is invalid" required>
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="control-label">Mot de Passe</label>
    <div class="row">
      <div class="col-md-6">
        <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Mot de Passe" required>
        <div class="help-block">Minimum  6 characters</div>
      </div>
      <div class="col-md-6">
        <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirmer" required>
        <div class="help-block with-errors"></div>
      </div>
    </div>
  </div>
  <div class="form-group" >
    <button type="submit" class="btn btn-primary" style="margin-left:500px; width:150px; height:50px; background-color:#84CFE8 ; " >Valider</button>
  </div>
 </fieldset>
</form>
</div>
</div>
  </div>                              
                                
                           
                                
                                
                            
                                
                                
                                



<!-- //Container Section End -->
<?php include "footer.php"; ?>
