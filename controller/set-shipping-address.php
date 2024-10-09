<?php

require_once '../model/Order.php'; 

session_start();

if (isset($_SESSION['order'])) {
    try{
        $order = $_SESSION['order'];

        $shippingAddress = $_POST['shippingAddress'];
        $shippingCity = $_POST['shippingCity'];
        $shippingCountry = $_POST['shippingCountry'];
        
        
        $order->setShippingAddress($shippingAddress, $shippingCity, $shippingCountry);
        
        $_SESSION['order'] = $order;
        require_once '../view/order-shipping-method.php';
    } catch (Exception $e) {
        require_once "../view/order-error.php";

    }
} else {
    echo "Aucune commande en cours.";
}