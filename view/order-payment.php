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

	<?php if (!empty($_POST['shippingAddress']) && !empty($_POST['shippingCity']) && !empty($_POST['shippingCountry'])) {
            $shippingAddress = $_POST['shippingAddress'];
            $shippingCity = $_POST['shippingCity'];
            $shippingCountry = $_POST['shippingCountry'];
        ?>
            <p>Votre colis sera livré à l'adresse suivante : <?php echo "$shippingAddress, $shippingCity, $shippingCountry"; ?>.</p>
			
        <?php
        } else {
            echo "<p>Veuillez saisir votre adresse de livraison.</p>";
        }
        ?>
		<br>
		<p>Veuillez choisir un moyen de paiement</p>
		<form >
            
        </form>
	</main>

	</body>
</html>