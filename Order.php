

<?php
/*USER STORY :
- Créer une commande
- Supprimer des produits
- Ajouter des produits
- Choisir la méthode de livraison
- Remplir l'adresse de livraison
- Payer
- Annuler

Regles métier (exceptions, règles faites par les chefs de projet):
- max 5 produits par commande,
- Bannissement de "jean dupont"
*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Order {
    private $products;
    private float $totalPrice;
    private int $id;
    private ?string $shippingMethod;
    private ?string $shippingAdress;
    private string $customerName;
    private DateTime $createdAt;
    private string $status;

    public function __construct(string $customerName, array $products) {
        if($customerName === 'jean dupont'){
            throw new Exception(message: 'Achat impossible, vous êtes blacklisté');
        }
        if(count($products) > 5) {
            throw new Exception(message: 'Panier complet');
        }
        
        $this->status = 'CART';
        $this->createdAt = new DateTime();
        $this->id = rand();

        $this->products = $products;

        $this->customerName = $customerName;
        
        
        $this->totalPrice = count($products) * 5;

        

        echo "Commande {$this->id} créée d'un montant de {$this->totalPrice} €";
    }
}


//Methode du try catch qui récupère le message pour l'afficher plutot que de mettre une erreur
//permet de ne pas faire crasher la page avec les exception.
try {
    $order = new Order(customerName:'jean dupont', products:['casque', 'téléphone','casque', 'téléphone','casque', 'téléphone']);
} catch(Exception $error) {
    echo $error->getMessage();
}




