<?php
include('header.php');
require_once("../crudproduit.php");
require_once("../crudlignecommande.php");
if (isset($_GET['id'])) { 

$lc= new crudlignecommande();
$cp= new crudproduit();

//pas de ci
$conn=$cp->conn;
$lg= $lc->affichecomm($_GET['id'],$conn);
	?>
	<div class="row">
	<div class="span2"></div>
		
	<div class="span10">
		<fieldset>
			<table class="table table-bordered table-hover table-striped">
			                                                <tr class="active">
				<th>Name</th>
				<th>quantity</th>
				<th>unit price</th>
				<th>sub total</th>
			</tr>

			<?php
			foreach ($lg as $l) { 
				$actuel=$cp->recupererproduit($l['id_produit'],$conn);
				?>
				<tr>
					<td><?= $actuel['title'] ?></td>
					<td><?= $l['quantity'] ?></td>
					<td><?= $actuel['price'] ?></td>
					<td><?= $l['prix_total'] ?></td>
				</tr>
			<?php }
			?>
		</table>
		</fieldset>
			<a href="commande.php" class="pull-right"><button class="btn btn-default">	RETURN</button></a>
	</div>
</div>
<?php }
include('footer.php');

?>
