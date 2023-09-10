<?php

// require_once "Book.php";
require_once "PhysicalBook.php";
require_once "DigitalBook.php";


$physicalBook = new PhysicalBook('The Hobbit', 'John Ronald Reuel Tolkien', 2300, 350);
$digitalBook = new DigitalBook('The Hobbit', 'John Ronald Reuel Tolkien', 1300, 1024);

print $physicalBook->getInfo() . PHP_EOL;
print $digitalBook->getInfo() . PHP_EOL;

print $physicalBook->getPriceAsCurency() . PHP_EOL;
print $digitalBook->getPriceAsCurency() . PHP_EOL;