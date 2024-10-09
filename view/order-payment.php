<!DOCTYPE html>
<html>
	<head>
		<title>Commande créée</title>
	</head>
	<body>

	<header>
		<h1>Le Eshop au top</h1>
	</header>
	
	<main>
<?php var_dump($_SESSION)  ?>

		<p>Recapitulatif de votre commande: </p>
		<p>Nom de la commande : <?php echo "$customerName"?></p>
		<p>Articles : <?php echo "$products"?></p>
		<p>Adresse de Livraison: <?php echo "$shippingAdress, $shippingCity, $shippingCountry"?></p>
		<p>Moyen de Livraison choisi:<?php echo "$shippingMethod"?></p>
		<br>
		<p>Total à Payer:<?php echo "$totalPrice"?></p>

	
        <form action="../view/order-finish.php">
			<button type="submit">Payer</button>
		</form>

	</main>

	</body>
</html>