<?php

require_once '../model/Order.php'; 

session_start();

if (isset($_SESSION['order'])) {
    $shippingAddress = $_POST['shippingAddress'];
    $shippingCity = $_POST['shippingCity'];
    $shippingCountry = $_POST['shippingCountry'];
    $order = $_SESSION['order'];
    
	$order->setShippingAddress($shippingAddress, $shippingCity, $shippingCountry);
	require_once '../view/order-payment.php';
} else {
    echo "Aucune commande en cours.";
}