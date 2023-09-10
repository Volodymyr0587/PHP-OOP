<?php

class Product
{
    public $name;
    public $price;

    public function __construct($name = 'Soap', $price = 10)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function priceAsCurrency($divisor = 1, $currencySymbol = '₴'): string
    {
        $priceAsCurrency = $this->price / $divisor;
        return $currencySymbol . $priceAsCurrency;
    }
}

// $product = new Product('Tyres', 300);
$product = new Product(price: 20);
print $product->name . " " . $product->price . PHP_EOL;



