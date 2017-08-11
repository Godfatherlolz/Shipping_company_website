<?php include 'class/crud.php' ;?>
<?php include 'class/function.php' ;?>
<?php include 'class/ticket.php' ;?>

<?php if(!isset($_SESSION))
    {
        session_start();

    }

if(isset($_SESSION['user_id']))
{
  $userid=$_SESSION['user_id'];
}


$cc=new crud();
if(isset($_POST['submit'])){
  if(  empty($_SESSION['nom']) ){
    header('location: ins.php?warning=1');

  }else{
$name=$_SESSION['nom'].' '.$_SESSION['prenom'];
$email=$_SESSION['email'];

$user_id=$_SESSION['id'];
$text= '<b>'.$_POST['sujet'].'</b> ' .$_POST['text'];


  $tick= new ticket($user_id,$name,$email,$text,1);

$cc->ajouterTicket($cc->conn,$tick);
header('Location: ' . $_SERVER['REQUEST_URI'] . '?success=1');





}}
?>
<?php include 'header.php';?>
<div class="breadcum">
    <div class="container">
        <ol class="breadcrumb">
            <li>
                <a href="index.html"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                </a>
            </li>
            <li class="hidden-xs">
                <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                <a href="contact.php">Contact</a>
            </li>
        </ol>
        <div class="pull-right">
            <i class="livicon icon3" data-name="cellphone" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Contact
        </div>
    </div>
</div>
<!-- //Breadcrumb Section End -->
<!-- Map Section Start -->
<div class="">
    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3194.757168762407!2d10.266299851042183!3d36.80037217529085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd4a7a8a3ad4a3%3A0x11ff0452013bdc6f!2sSOCOTU!5e0!3m2!1sfr!2s!4v1469459097463"></iframe>

</div>
<!-- //map Section End -->
<!-- Container Section Start -->
<div class="container">
    <div class="row">
        <!-- Contact form Section Start -->
        <div class="col-md-6">

            <h2>Contactez-nous</h2>
            <?php  if (isset($_GET['success'])){ echo '<div style="margin-top:30px;" class="alert alert-success">

      <strong> Merci  ';?><?php echo $_SESSION['prenom'];?><?php echo '</strong> Notre réponse ne dépassera pas les prochaines 48 heures .
    </div>
    ';}?>
            <form class="contact" action="contact.php" method="POST">
              <input type="hidden" name="user_id" value="<?php if(isset($_SESSION['id']))echo $_SESSION['id'];?>">
                <div class="form-group">
                    <input type="text" name="nom" placeholder="Nom & Prénom" class="form-control input-lg" value="<?php if(isset($_SESSION['nom'])){echo $_SESSION['prenom'].' '.$_SESSION['nom'] ; }?>"<?php if(isset($_SESSION['nom'])){echo 'readonly'; } ?>  >
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control input-lg" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" required >
                </div>
                <div class="form-group">

                    <select id="subject" name="sujet" class="form-control input-lg" placeholder="--Sélectionner un sujet">
                      <option value="--Sélectionner un sujet" disabled select >--Sélectionner un sujet</option>
                      <option value="Générale"><strong>Générale</strong></option>
                      <optgroup label="Logistique">
                      <option value="Transport">Transport</option>
                      <option value="Transit">Transit</option>
                      <option value="Agence Maritime">Agence Maritime</option>
                      <option value="Entrposage">Entrposage</option>
                        </optgroup>
                        <optgroup label="Technique">
                          <option value="Téléchargement">Téléchargement</option>
                          <option value="Navigation">Navigation</option>
                          <option value="Bugs">Bugs</option>
                          <option value="Transport">Désactiver son Compte</option>

                          </optgroup>
                            <optgroup label="Report">
                              <option value="Tentative d'arnaque">Tentative d'arnaque</option>
                              <option value="Harcèlement">Harcèlement</option>
                              </optgroup>

                    </select>
                  </div>

                <div class="form-group">
                    <textarea class="form-control input-lg no-resize" name="text" rows="6" placeholder="Your comment"></textarea>
                </div>

                <div class="input-group">
<input class="btn btn-primary "type="submit" value="Envoyer" name="submit" style="margin-top:18px;">

                </div>
            </form>
        </div>
        <!-- //Conatc Form Section End -->
        <!-- Address Section Start -->
        <div class="col-md-6 col-sm-6">
            <div class="media media-right">
                <div class="media-left media-top">
                    <a href="#">
                        <div class="box-icon">
                            <i class="livicon" data-name="home" data-size="22" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                        </div>
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Address:</h4>
                    <div class="danger">Direction Commerciale</div>
                    <address>
                        Zone Portuaire
                        <br> de Rades 2040
                        <br>Tunis,Tunisie.

                    </address>
                </div>
            </div>
            <div class="media padleft10">
                <div class="media-left media-top">
                    <a href="#">
                        <div class="box-icon">
                            <i class="livicon" data-name="phone" data-size="22" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                        </div>
                    </a>
                </div>
                <div class="media-body padbtm2">
                    <h4 class="media-heading">Telephone:</h4> (703) 717-4200
                    <br /> Fax:400 423 1456
                </div>
            </div>
        </div>
        <!-- //Address Section End -->
    </div>
</div>
<?php include "footer.php"; ?>
