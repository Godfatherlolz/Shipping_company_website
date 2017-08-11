<?php

require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');
require_once ('jpgraph/jpgraph_bar.php');

$x_axis = array();
$y_axis = array();
$i = 0;
 
$con=@mysqli_connect("localhost","root","","read");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
$result = @mysqli_query($con,"SELECT SUM(`prix_commande`) as prixtot, WEEK(`date_commande`) as month FROM `commande` group by month order by WEEK(`date_commande`) asc");
 
 
while($row = @mysqli_fetch_array($result)) {
$x_axis[$i] =  $row["month"];
$y_axis[$i] = $row["prixtot"];
    $i++;
 
}
mysqli_close($con);
$width = 600; $height = 700;
$graph = new Graph($width,$height);
$graph->SetScale('textint');
$graph->title->Set('Nombre De Commandes Par Mois');
$graph->xaxis->title->Set('(mois)');
$graph->xaxis->SetTickLabels($x_axis);
$graph->yaxis->title->Set('');
$barplot=new BarPlot($y_axis);
$graph->Add($barplot);
 
$graph->Stroke();
 ?>
   <?php 
include('footer.php');

?>  
