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

	
        <p>Votre commande est validée.</p>
        <p>Recapitulatif de votre commande :</p>
        <p>Nom : <?php echo "$customerName"?></p>
        <p>Article: <?php echo "$products"?></p>
        <p>Adresse: <?php echo "$shippingAddress, $shippingCity, $shippingCountry"; ?></p>
        <p>Mode de livraison: <?php echo "$shippingMethod"?></p>
        <br>
		<p>Prix de votre commande : <?php echo "$totalPrice" ?></p>
        <p>Merci pour votre commande.</p>

	</main>

	</body>
</html>