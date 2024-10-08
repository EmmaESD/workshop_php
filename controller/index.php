<?php
require_once '../model/Order.php';

try {
	$order = new Order('Nagui', ['g', 'stylo', 'trousse', 'ak-47']);
    echo "<html><body>Commande créée</body></html>";
} catch(Exception $error) {
	echo "<html><body>" . $error->getMessage() . "</body></html>";
}