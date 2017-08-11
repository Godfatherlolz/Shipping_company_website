<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=socotu', 'root', '');

if(isset($_POST['connexion'])) { 
   $email = htmlspecialchars($_POST['email']);
   $password = ($_POST['password']);
   if(!empty($email) AND !empty($password)) {
      $requser = $bdd->prepare("SELECT * FROM admin WHERE email = ? ");
      $requser->execute(array($email));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
          if ( $userinfo['id']==0) {
  $erreur = "Mauvais mail ou mot de passe !"; 
        }

        
        else if (password_verify($password,$userinfo['password'])==true) {


         $_SESSION['id_admin'] = $userinfo['id'];
         $_SESSION['email_admin'] = $userinfo['email'];
         header("Location: index.php?id=".$_SESSION['id_admin']);
          }
         else {
         $erreur = "Mauvais mail ou mot de passe !";
     }
      } 
       else {
        $erreur = "Tous les champs doivent être complétés !";
}
      
    
      
   }
   else {
        $erreur = "Tous les champs doivent être complétés !";
}
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Login | SOCOTU</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="../back/css/bootstrap.min.css" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="../back/css/pages/login2.css" rel="stylesheet" />
    <link href="../back/vendors/iCheck/skins/minimal/blue.css" rel="stylesheet" />
    <!-- styles of the page ends-->
</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class=" col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form" method="post" action="">
                            <fieldset>
                                <div class="form-group input-group">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="at" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="E-mail" name="email" type="text" />
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-addon">
                                        <i class="livicon" data-name="key" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" />
                                </div> 

                                <div class="form-group">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me" class="minimal-blue">
                                        Remember Me
                                    </label>
                                </div>
                               <button type="submit" name="connexion" class="btn btn-responsive btn-info btn-sm">Connexion</button>
                            </fieldset>
                        </form>
                        <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="../back/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="../back/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="../back/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="../back/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js-->
    <script src="../back/js/TweenLite.min.js"></script>
    <script src="../back/vendors/iCheck/icheck.js" type="text/javascript"></script>
    <script type="../back/text/javascript">
    $(document).ready(function() {
        $(document).mousemove(function(event) {
            TweenLite.to($('body'), .5, {css:{'background-position':parseInt(event.pageX/8) + "px "+parseInt(event.pageY/12)+"px, "+parseInt(event.pageX/15)+"px "+parseInt(event.pageY/15)+"px, "+parseInt(event.pageX/30)+"px "+parseInt(event.pageY/30)+"px"}});
        });

        //Flat red color scheme for iCheck
        $('input[type="checkbox"].minimal-blue').iCheck({
            checkboxClass: 'icheckbox_minimal-blue'
        });
    });
    </script>
    <!-- end of page level js-->
</body>
</html>