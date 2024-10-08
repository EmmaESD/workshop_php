<?php

require_once '../model/Order.php'; 

session_start();

if (isset($_SESSION['order'])) {
    $shippingMethod = $_POST['shippingMethod'];
    $order = $_SESSION['order'];
    
	$order->setShippingMethod($shippingMethod);
	require_once '../view/order-finish.php';
} else {
    echo "Aucune commande en cours.";
}