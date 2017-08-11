<?php include "header.php"; ?>
<link href="back/vendors/wizard/acc-wizard-master/css/acc-wizard.min.css" rel="stylesheet" />
<link href="back/css/pages/accordionformwizard.css" rel="stylesheet" />
<div class="breadcum">
    <div class="container">
        <ol class="breadcrumb">
            <li>
                <a href="index.html"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                </a>
            </li>
            <li class="hidden-xs">
                <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                <a href="#">Demande de Cotation M</a>
            </li>
        </ol>
        <div class="pull-right">
            <i class="livicon icon3" data-name="responsive-menu" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Demande de Cotation M
        </div>
    </div>
</div>
<!-- //Breadcrumb Section End -->
<div class="container">
    <!-- Slider Section Start -->
    <div class="text-left">
        <h3 class="border-primary"><span class="heading_border bg-primary">Demande de Cotation M</span></h3>
        <label class=" text-center">Nous avons réussi à tisser des partenariats à long terme en collaboration étroite avec nos clients, développant ainsi une maitrise particulière des chaines d'approvisionnment et une connaissance approfondie des impératifs de ces secteurs d'activité.</label>
    </div>
  <div class="container bg-border">
        <div class="row acc-wizard">
            <div class="col-md-3 pd-2">
                <p class="mar-2">
                    Demande de cotation- Port Maritime( Unité Complète)
                </p>
                <ol class="acc-wizard-sidebar">
                    <li class="acc-wizard-todo acc-wizard-active">
                        <a href="#marchandise">Designation de La Marchandise</a>
                    </li>
                    <li class="acc-wizard-todo">
                        <a href="#transport">Type de Transport</a>
                    </li>
                    <li class="acc-wizard-todo">
                        <a href="#expedition">Information d'expedition</a>
                    </li>
                    <li class="acc-wizard-todo">
                        <a href="#finaliser">Finaliser</a>
                    </li>

                </ol>
            </div>
            <div class="col-md-9 pd-r" style="margin-top:60px;">
                <div id="accordion-demo" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#0795e9;">
                            <h4 class="panel-title">
                                <a href="#marchandise" data-parent="#accordion-demo" data-toggle="collapse">Désignation de la Marchandise</a>
                            </h4>
                        </div>
                        <div id="marchandise" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <form id="form-prerequisites">

                                <h3> S'agit il d'une marchandise Dangereuse ?   <input type="checkbox" name="my-checkbox" checked data-on-color="primary" data-off-color="info"></h3>

                                    <div class="acc-wizard-step"></div>
                                </form>
                            </div>
                            <!--/.panel-body --> </div>
                        <!-- /#prerequisites --> </div>
                    <!-- /.panel.panel-default -->

                    <div class="panel panel-info">
                      <div class="panel-heading" style="background-color:#0795e9;">
                            <h4 class="panel-title">
                                <a href="#transport" data-parent="#accordion-demo" data-toggle="collapse">Type de Transport</a>
                            </h4>
                        </div>
                        <div id="transport" class="panel-collapse collapse awd-h" style="height: 36.400001525878906px;">
                            <div class="panel-body">
                                <form id="form-addwizard">
                            //
                                    <div class="acc-wizard-step"></div>
                                </form>
                            </div>
                            <!--/.panel-body --> </div>
                        <!-- /#addwizard --> </div>
                    <!-- /.panel.panel-default -->
                    <div class="panel panel-info">
                      <div class="panel-heading" style="background-color:#0795e9;">
                            <h4 class="panel-title">
                                <a href="#expedition" data-parent="#accordion-demo" data-toggle="collapse">Information d'expedition</a>
                            </h4>
                        </div>
                        <div id="expedition" class="panel-collapse collapse awd-h" style="height: 36.400001525878906px;">
                            <div class="panel-body">
                                <form id="form-addwizard">
                                    <p>
                                        www
                                    </p>


                                    <div class="acc-wizard-step"></div>
                                </form>
                            </div>
                            <!--/.panel-body --> </div>
                        <!-- /#addwizard --> </div>
                    <!-- /.panel.panel-default -->
                    <div class="panel panel-info">
                      <div class="panel-heading" style="background-color:#0795e9;">
                            <h4 class="panel-title">
                                <a href="#finaliser" data-parent="#accordion-demo" data-toggle="collapse">Finaliser </a>
                            </h4>
                        </div>
                        <div id="finaliser" class="panel-collapse collapse awd-h" style="height: 36.400001525878906px;">
                            <div class="panel-body">
                                <form id="form-addwizard">

                                    <div class="acc-wizard-step"></div>
                                </form>
                            </div>
                            <!--/.panel-body --> </div>
                        <!-- /#addwizard --> </div>
                    <!-- /.panel.panel-default -->

                    <!-- /.panel.panel-default -->

                    <!-- /.panel.panel-default -->

                    <!-- /.panel.panel-default --> </div>
            </div>
        </div>
</div>
</div>

<?php include "footer.php"; ?>
