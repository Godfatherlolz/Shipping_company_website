<?php
$con = @mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . @mysql_error());
}

@mysql_select_db("read", $con);

$result = @mysql_query("SELECT date_commande, SUM(prix_commande) FROM commande Group BY  date_commande");

$rows = array();
while($r = @mysql_fetch_array($result)) {
	$row[0] = $r[0];
	$row[1] = $r[1];
	array_push($rows,$row);
}

print json_encode($rows, JSON_NUMERIC_CHECK);

@mysql_close($con);
?> 
