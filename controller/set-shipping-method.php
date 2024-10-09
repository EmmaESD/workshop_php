<?php

require_once '../model/Order.php'; 

session_start();

if (isset($_SESSION['order'])) {
    try {
        $order = $_SESSION['order'];

        $shippingMethod = $_POST['shippingMethods'];
    
	    $order->setShippingMethod($shippingMethod);

        $_SESSION['order'] = $order;

	    require_once '../view/order-payment.php';
    } catch (Exception $e) {
        require_once "../view/order-error.php";

    }
    
} else {
    echo "Aucune commande en cours.";
}