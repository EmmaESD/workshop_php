

<?php
/*USER STORY :
- Créer une commande
- Supprimer des produits
- Ajouter des produits
- Choisir la méthode de livraison
- Remplir l'adresse de livraison
- Payer
- Annuler
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
        $this->status = 'CART';
        $this->createdAt = new DateTime();
        $this->id = rand();

        $this->products = $products;
        $this->customerName = $customerName;

        $this->totalPrice = count($products) * 5;

        echo "Commande {$this->id} créée d'un montant de {$this->totalPrice} €";

    }
}

$order = new Order(customerName:'John Doe', products:['casque', 'téléphone']);


