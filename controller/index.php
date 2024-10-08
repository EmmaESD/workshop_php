<?php
require_once '../model/Order.php';

try {
	$order = new Order('Nagui', ['g', 'stylo', 'trousse', 'ak-47']);
    require_once '../view/order-created.php'
} catch(Exception $error) {
	require_once '../view/order-error.php'
}