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
		<p>La commande a été créée avec succès. Ajoutez votre adresse de livraison.</p>

        <form method="POST" action="../controller/set-shipping-address.php">
            <input type="text" name="shippingAddress" id="shippingAddress" placeholder="Adresse">
            <input type="text" name="shippingCountry" id="shippingCountry" placeholder="pays">
            <input type="text" name="shippingCity" id="shippingCity" placeholder="ville">
            <button type="submit">Envoyer</button>
        </form>
	</main>

	</body>
</html>