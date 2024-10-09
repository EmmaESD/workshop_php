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
		<p>La commande a été créée avec succès. Ajoutez votre adresse de livraison.</p>

		<p>Ajoutez votre adresse de livraison.</p>

		<form method="POST" action="../controller/set-shipping-address.php">
			<input type="text" name="shippingAddress" id="shippingAddress" placeholder="Adresse" required minlength="2" maxlength="100" pattern="^(?!\s*$).{2,100}$">
			<input type="text" name="shippingCountry" id="shippingCountry" placeholder="pays" required minlength="2" maxlength="100" pattern="^(?!\s*$).{2,100}$">
			<input type="text" name="shippingCity" id="shippingCity" placeholder="ville" required minlength="2" maxlength="100" pattern="^(?!\s*$).{2,100}$">
			<button type="submit">Envoyer</button>
		</form>

	</main>

	</body>
</html>