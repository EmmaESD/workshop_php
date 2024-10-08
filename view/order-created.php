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

	if (isset($_SESSION['customerName']) && isset($_SESSION['products'])) {
    $customerName = $_SESSION['customerName'];
    $products = $_SESSION['products'];
	}
		?>
		<p>La commande a été créée avec succès. Ajoutez votre adresse de livraison.</p>

        <form action="../view/order-address.php" method="GET">
    		<button type="submit">Aller à la page</button>
		</form>

	</main>

	</body>
</html>