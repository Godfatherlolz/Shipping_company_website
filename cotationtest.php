<?php include 'header.php'; ?>
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
  <div class="panel-heading"><div class="text-center"><h2 style="color:white;"><strong>Demande de Cotation -Identification de la Marchandise</strong></h2></div></div>
  <div class="panel-body "><!--style="background:#154360  ;-->
    <div class="form-group">
      <div class="text-center" style="margin-bottom:60px;">
        <h2 ><strong>S'agit-t-il d'une marchandise dangereuse ?</strong></h2>
      </div>
    <div class="btn-group-center">
        <div class="col-md-6 display-no" style="display: block;">
      <form method="get" action="cotationtestnon.php">
      <button type="submit" class="btn btn-success btn-block" style="font-size:35px" style="border : 4px solid #fff">Non</button></form></div>
        <div class="col-md-6 display-no" style="display: block;">
        <form method="get" action="cotationtestoui.php">
      <button type="submit" class="btn btn-danger btn-block" style="font-size:35px" style="border : 4px solid #fff">Oui</button></form></div>
    </div>
    </div>
  </div>
</div>


</div>
<?php include 'footer.php'; ?>
