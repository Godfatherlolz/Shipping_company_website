<?php include "header.php"; ?>
<script type= "text/javascript" src = "js/countries.js"></script>
<link href="back/vendors/validation/dist/css/bootstrapValidator.min.css" rel="stylesheet"/>
<script src="back/vendors/js/pages/validation.js" type="text/javascript" ></script>

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
<form class="form-horizontal" id="ins" method="POST" action="ajout_client.php">
<div class="row">
<div class="col-md-6">

<fieldset>

<!-- Form Name -->
<legend> Information Compagnie </legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nom société">Nom société</label>  
  <div class="col-md-5">
  <input id="Nom société" name="societe" type="text" placeholder="Nom société" class="form-control input-md" required="">
    
  </div>

</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="Activité">Activité</label>  
  <div class="col-md-5">
  <input id="Activité" name="activite" type="text" placeholder="Activité" class="form-control input-md" required="">
    
  </div>

</div>
  <hr>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Adresse">Adresse</label>  
  <div class="col-md-8">
  <input id="Adresse" name="adresse" type="text" placeholder="Adresse" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="Ville">Ville</label>  
  <div class="col-md-4">
  <input id="Ville" name="Ville" type="text" placeholder="Ville" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Code postal">Code postal</label>  
  <div class="col-md-2">
  <input id="Code postal" name="code_postal" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
<label class="col-md-4 control-label" for="Pays">Pays</label>  
<div class="col-md-4">
<select id="country" name ="pays" class="form-control"></select>
 </div>
</div>
<div class="form-group">
<label class="col-md-4 control-label" for="Gouvernorat">Gouvernorat</label>  
<div class="col-md-4">
<select name ="gouv" id ="state" class="form-control"></select> 

 </div>
</div>

    <script language="javascript">
    populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
    populateCountries("country2");
    populateCountries("country2");
</script>
</fieldset>

</div>
<div class="col-md-6">

<fieldset>

<!-- Form Name -->
<legend>Information utilisateurs</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Civilité">Civilité</label>
  <div class="col-md-4">
    <select id="Civilité" name="Civ" class="form-control">
      <option value="Monsieur">Monsieur</option>
      <option value="Madame">Madame</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Prénom" required="">Prénom</label>  
  <div class="col-md-4">
  <input id="Prenom" name="prenom" type="text" placeholder="Prénom" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nom" required="">Nom</label>  
  <div class="col-md-4">
  <input id="nom" name="nom" type="text" placeholder="Nom" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Téléphone fixe" required="">Téléphone fixe</label>  
  <div class="col-md-4">
  <input id="telephone" name="telephone" type="text" placeholder="Téléphone fixe" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Téléphone portable">Téléphone portable</label>  
  <div class="col-md-4">
  <input id="tel_port" name="tel_port" type="text" placeholder="Téléphone portable" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Fax">Fax</label>  
  <div class="col-md-4">
  <input id="fax" name="fax" type="text" placeholder="Fax" class="form-control input-md">
    
  </div>
</div>

</fieldset>


</div>
</div>
<div class="row">
<div class="col-md-6">

</div>
<div class="col-md-6">

<fieldset>


<legend> Configuration compte </legend>
<div class="form-group">
    <label for="inputEmail" class="control-label">Identifiant (email)</label>   
    <input type="email" class="form-control" name="email"  id="email" placeholIdentifiant (email)der="Email" data-error="Bruh, that email address is invalid" required>
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="control-label">Mot de Passe</label>
    <div class="row">
      <div class="col-md-6">
        <input type="password" data-minlength="6" class="form-control" name="mdp" id="mdp" placeholder="Mot de Passe" required>
        <div class="help-block">Minimum  6 characters</div>
      </div>
      <div class="col-md-6">
        <input type="password" class="form-control" id="inputPasswordConfirm" name="mdpC" id='mdpC'  placeholder="Confirmer" required>
        <div class="help-block with-errors"></div>
      </div>
    </div>
  </div>
  
  <div class="form-group" >
    <button type="submit" class="btn btn-primary" name="submit" style="margin-left:500px; width:150px; height:50px; background-color:#84CFE8 ; " >Valider</button>
  </div>
 </fieldset>
</form>
</div>
</div>
  </div>                              
                                
                           
        <script type="text/javascript">
  $(document).ready(function () {
    var validator = $("#ins").bootstrapValidator({
      fields : {

        nom :{
          message : "name is required",
          validators : {
            notEmpty : {
              message : "Please provide a name"
              }
            }
            },
             prenom :{
          message : "Last name is required",
          validators : {
            notEmpty : {
              message : "Please provide a Last name"
              }
            }
            },
             telephone : {
                    validators: {
                        integer: {
                            message: 'The value is not an integer'
                            
                        }
                    }
                },
               tel_port : {
                    validators: {
                        integer: {
                            message: 'The value is not an integer'
                            
                        }
                    }
                },
               fax : {
                    validators: {
                        integer: {
                            message: 'The value is not an integer'
                            
                        }
                    }
                },
        email :{
          message : "Email address is required",
          validators : {
            notEmpty : {
              message : "Please provide an email address"
            }, 
            stringLength: {
              min : 6, 
              max: 35,
              message: "Email address must be between 6 and 35 characters long"
            },
            emailAddress: {
              message: "Email address was invalid"
            }
          }
        }, 
        mdp : {
          validators: {
            notEmpty : {
              message : "Password is required"
            },
            stringLength : {
              min: 8,
              message: "Password must be 8 characters long"
            }, 
            
          }
        }, 
        mdpC : {
          validators: {
            notEmpty : {
              message: "Confirm password field is required"
            }, 
            identical : {
              field: "password", 
              message : "Password and confirmation must match"
            }
          }
        }, 
       
      }
    });
  
   
    
  });
</script>                        
                                
                            
                                
                                
                                



<!-- //Container Section End -->
<?php include "footer.php"; ?>
