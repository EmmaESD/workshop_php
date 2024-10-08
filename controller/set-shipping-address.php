<?php

require_once '../model/Order.php'; 

session_start();

if (isset($_SESSION['order'])) {
    $shippingAddress = $_POST['shippingAddress'];
    $shippingCity = $_POST['shippingCity'];
    $shippingCountry = $_POST['shippingCountry'];
    $order = $_SESSION['order'];
    
	$order->setShippingAddress($shippingAddress, $shippingCity, $shippingCountry);

    $_SESSION['shippingAddress'] = $shippingAddress;
    $_SESSION['shippingCity'] = $shippingCity;
    $_SESSION['shippingCountry'] = $shippingCountry;

	header("Location: ../view/order-delivery-method.php");
    exit();
} else {
    echo "Aucune commande en cours.";
}