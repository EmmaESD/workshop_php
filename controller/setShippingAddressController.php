<?php



class SetShippingAddressController {
    public function SetShippingAddress{
        session_start();
        if (!isset($_SESSION['order'])) {
            require_once '../view/404.php';
            return;
        }
        
        require_once './view/setShippingAddressController.php';
    }
        
}

