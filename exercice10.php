<?php
/*
 * ÉNONCÉ :
 * Le code ci-dessous n'est pas orienté objet (que des fonctions).
 * Refactorisez ce code en créant une classe ShoppingCart avec des méthodes équivalentes.
 */

class ShoppingCart {
    protected array $items = [];

    public function addItem(string $name, float $price): void {
        $this->items[] = ['name' => $name, 'price' => $price];
    }

    public function getTotal(): float {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['price'];
        }
        return $total;
    }

    public function display(): void {
        foreach ($this->items as $item) {
            echo $item['name'] . " : " . $item['price'] . " €<br>";
        }
    }
}

$cart = new ShoppingCart();
$cart->addItem("Livre", 12.5);
$cart->addItem("Stylo", 2.3);
$cart->display();
echo "------------------------------<br>";
echo "Total : " . $cart->getTotal() . " €\n";