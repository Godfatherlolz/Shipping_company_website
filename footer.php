
<?php
include_once'class/function.php';
include_once'class/crud.php';
$cc=new crud();
;

?>
<footer>
    <div class="container footer-text">
        <!-- About Us Section Start -->
        <div class="col-sm-4">
            <h4>A propos</h4>
            <p>
              La SOCOTU , qui a été créée en 1900, a toujours su et pu fournir des solutions logistiques adaptées aux besoins et exigences de sa clientèle et du marché national et international dans les domaines des transports maritime, aérien et routier et de leurs activités connexes. ”

La SOCOTU offre à ses partenaires et clients une gamme de services intégrés à haute valeur ajoutée à coûts compétitifs et délais réduits avec une organisation décentralisée par des implantations de proximité bien ancrées dans toutes les régions agricoles, commerciales et industrielles.
            </p>
            <h4>Suivez SOCOTU</h4>
            <ul class="list-inline">
                <li>
                    <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- //About us Section End -->
        <!-- Contact Section Start -->
        <div class="col-sm-4">
            <h4>Contactez-nous</h4>
            <ul class="list-unstyled">
                <li>Zone Portuaire de Rades 2040 </li>
                <li>Tunis,Tunisie.</li>
                <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Téléhone:+216 71 448 022</li>
                <li><i class="livicon icon4 icon3" data-name="printer" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Fax:+216 71 448 159</li>
                <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Email:<span class="success">
                    <a href="mailto:">dg.socotu@planet.tn</a></span>
                </li>
                <li><i class="livicon icon4 icon3" data-name="skype" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Skype:
                    <span class="success">Socotu</span>
                </li>
            </ul>
            <div class="news">
                <h4>News letter</h4>
                <p>Inscrivez vous à notre service News letter et restez mis à jour afin de bénéficier de toutes nouveautés.</p>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="yourmail@mail.com" aria-describedby="basic-addon2">
                    <a href="#" class="btn btn-primary text-white" role="button">Inscrivez-vous</a>
                </div>
            </div>
        </div>
        <!-- //Contact Section End -->
        <!-- Recent post Section Start -->
        <div class="col-sm-4">
          <div class="row">
          <figure class="span3">
            <?php $listu=$cc->afficheruptime($cc->conn);?>
            <h4>Disponibilité</h4><?php foreach ( $listu as $lu){ ?>
            <p>Monday-Friday ______<?php echo $lu[1] ;?> to <?php echo $lu[2] ;?></p>
            <p>Saturday ____________ <?php echo $lu[3] ;?> to <?php echo $lu[4] ;?></p>
            <p>Sunday _____________<?php echo $lu[5] ;?> to <?php echo $lu[6] ;?></p>
          <?php } ?>
          </figure>
        </div>
        <div class="row">
<a class="twitter-timeline" data-width="400" data-height="250" data-dnt="true" data-theme="dark" data-link-color="#F5F8FA" href="https://twitter.com/ITUSS_SCTU">Tweets by ITUSS_SCTU</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>      </div>
        <!-- //Recent Post Section End -->
    </div>
</footer>
<!-- Copy right Section Start -->
<div class="copyright">
    <div class="container">
        <p>Copyright &copy; GangstaProd 2016 </p>
    </div>
</div>
<!-- Copy right Section End -->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!--global js starts-->

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/raphael.js"></script>
<script type="text/javascript" src="js/livicons-1.4.min.js"></script>
<script type="text/javascript" src="js/josh_frontend.js"></script>
<script src="back/vendors/holder-master/back/js/holder.js" type="text/javascript"></script>
<script src="back/vendors/modal/js/classie.js"></script>
<script src="back/vendors/modal/js/modalEffects.js"></script>
<!--global js end-->
<!-- page level js starts-->
<script type="text/javascript" src="js/jquery.circliful.js"></script>
<script type="text/javascript" src="vendors/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/index.js"></script>

  <script src="vendors/tags/dist/bootstrap-tagsinput.js"></script>
  <script type="text/javascript" src="js/faq.js"></script>
  <script type="text/javascript" src="vendors/mixitup/src/jquery.mixitup.js"></script>
  <script src="back/vendors/wizard/acc-wizard-master/js/acc-wizard.min.js"></script>
  <script src="back/js/pages/accordionformwizard.js" type="text/javascript"></script>
<!--page level js ends-->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/gmap.js"></script>

</body>

</html>
