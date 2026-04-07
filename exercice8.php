<?php
/*
 * ÉNONCÉ :
 * Créez une classe Invoice avec les propriétés protected number, client, items (tableau associatif avec description et montant).
 * Ajoutez les méthodes pour ajouter un item, calculer le total, et afficher la facture.
 * Instanciez une facture, ajoutez des items et affichez-la.
*/
class Invoice {
    protected string $number;
    protected string $client;
    protected array $items = [];

    public function __construct(string $number, string $client)
    {
        $this->number = $number;
        $this->client = $client;
    }

    public function addItem(string $description, float $amount): void
    {
        $this->items[] = ['description' => $description, 'amount' => $amount];
    }

    public function calculateTotal(): float
    {
        return array_sum(array_column($this->items, 'amount'));
    }

    public function displayInvoice(): void
    {
        echo "Invoice Number: " . $this->number . "<br>";
        echo "Client: " . $this->client . "<br>";
        echo "Items:<br>";
        foreach ($this->items as $item) {
            echo "- " . $item['description'] . ": $" . number_format($item['amount'], 2) . "<br>";
        }
        echo "Total: $" . number_format($this->calculateTotal(), 2) . "<br>";
    }
}

$invoice = new Invoice("INV-001", "John Doe");
$invoice->addItem("Web Design", 500.00);
$invoice->addItem("Hosting", 100.00);
$invoice->addItem("Maintenance", 150.00);
$invoice->displayInvoice();