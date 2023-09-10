<?php

class Product
{
    public function __construct(public $name = 'Soap', public $price = 10)
    {
    }

    public function priceAsCurrency($divisor = 1, $currencySymbol = '₴'): string
    {
        $priceAsCurrency = $this->price / $divisor;
        return $currencySymbol . $priceAsCurrency;
    }
}

// $product = new Product('Tyres', 300);
$product = new Product(price: 200);
print $product->name . " " . $product->price . PHP_EOL;



