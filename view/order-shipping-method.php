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
	<?php 
	var_dump($_SESSION);
	?>
	
        <p>Votre colis sera livré à l'adresse suivante : <?php echo "$shippingAddress, $shippingCity, $shippingCountry"; ?>.</p>
		
		<p>Veuillez choisir un moyen de paiement</p>
		<form method="POST" action="../controller/set-shipping-method.php">
			<select id="shippingMethod" name="shippingMethods[]" multiple>
				<option value="Chronopost Express">Chronopost Express</option>
				<option value="Point Relais">Point Relais</option>
				<option value="Domicile">Domicile</option>
			</select>
			<button type='submit'>Valider</button>
		</form>
		
	</main>

	</body>
</html>