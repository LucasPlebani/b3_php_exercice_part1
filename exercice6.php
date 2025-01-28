<?php

class ShoppingCart {
  
    private $items = [];
    private $total = 0;

 
    public function addItem($name, $price) {
        
        $this->items[] = [
            'name' => $name,
            'price' => $price
        ];

        $this->total += $price;
    }


    public function displayItems() {
        if (empty($this->items)) {
            echo "Le panier est vide.";
        } else {
            echo "Contenu du panier :";
            foreach ($this->items as $item) {
                echo "- ". $item['name'] ." : ". number_format($item['price'], 2) ." €";
            }
        }
    }

   
    public function calculateTotal() {
        return $this->total;
    }
}

$cart = new ShoppingCart();

$cart->addItem("article 1", 10);
$cart->addItem("article 2", 15);
$cart->addItem("article 3", 20);


$cart->displayItems();

echo "Coût total : " . number_format($cart->calculateTotal(), 2) . " €";

?>
 
/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */
