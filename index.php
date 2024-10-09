<?php

require_once('./controller/indexController.php');
require_once('./controller/CreateOrderController.php');

// Récupère l'url actuelle et supprime le chemin de base
// c'est à dire : http://localhost:8888/esd-oop-php/public/
// donc cela ne garde que la fin de l'url

$requestUri = $_SERVER['REQUEST_URI'];
$uri = parse_url($requestUri, PHP_URL_PATH);
$endUri = str_replace('/workshop/', '', $uri);
$endUri = trim($endUri, '/');


if($endUri === "") {
    $indexController = new IndexController();
    $indexController->index();
    return;
} 

if($endUri === "create-order") {
    $createOrderController = new CreateOrderController();
    $createOrderController->CreateOrder();
    return;
}

if($endUri === "set-shipping-address") {
    $setShippingAddressController = new SetShippingAddressController();
    $setShippingAddressController->SetShippingAddress();
    return;
}