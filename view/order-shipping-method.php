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
	session_start();

	if (isset($_SESSION['shippingAddress']) && isset($_SESSION['shippingCity']) && isset($_SESSION['shippingCountry'])) {
    $shippingAddress = $_SESSION['shippingAddress'];
    $shippingCity = $_SESSION['shippingCity'];
    $shippingCountry = $_SESSION['shippingCountry'];
	}
	?>
	
        <p>Votre colis sera livré à l'adresse suivante : <?php echo "$shippingAddress, $shippingCity, $shippingCountry"; ?>.</p>
		
		<p>Veuillez choisir un moyen de paiement</p>
		<form method="POST" action="../controller/set-shipping-method.php">
		<select id="shippingMethod" name="shippingMethods[]" multiple>
				<option value="Chronopost Express">Chronopost Express</option>
				<option value="Point Relais">Point Relais</option>
				<option value="Domicile">Domicile</option>
			</select>
        </form>
		<button type='submit'>Valider</button>
	</main>

	</body>
</html>