<?php

// require_once "Book.php";
require_once "PhysicalBook.php";
require_once "DigitalBook.php";


$physicalBook = new PhysicalBook('The Hobbit', 'John Ronald Reuel Tolkien', 2000);
$physicalBook->weight = 300;

print $physicalBook->getAuthor() . PHP_EOL;
print $physicalBook->getInfo() . PHP_EOL;

