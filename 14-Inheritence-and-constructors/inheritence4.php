<?php

// require_once "Book.php";
require_once "PhysicalBook.php";
require_once "DigitalBook.php";


$physicalBook = new PhysicalBook('The Hobbit', 'John Ronald Reuel Tolkien', 2000, 300);
$digitalBook = new DigitalBook('The Hobbit', 'John Ronald Reuel Tolkien', 1000, 1048);

print $physicalBook->getAuthor() . PHP_EOL;
print $physicalBook->getInfo() . PHP_EOL;

print $digitalBook->getAuthor() . PHP_EOL;
print $digitalBook->getInfo() . PHP_EOL;
print $digitalBook->getFileSize() . PHP_EOL;
print $digitalBook->getPrice() . PHP_EOL;


