<?php

class Product
{
    public $name = 'soap';
    public $price = 10;
}

$productObject = new Product();
print $productObject->name . "\n";
$productObject->name = 'toothpaste';
print $productObject->name . "\n";
print $productObject->price . "\n";
$productObject->price = 5;
print $productObject->price . "\n";
