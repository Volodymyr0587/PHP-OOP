<?php

require_once "Book.php";
require_once "PhysicalBook.php";
require_once "DigitalBook.php";

$book = new Book('The Shining', 'Stephen King', 3000);
print $book->getInfo() . PHP_EOL;
// print $book->getWeight() . PHP_EOL; //! Error: Call to undefined method Book::getWeight()

$physicalBook = new PhysicalBook('The Hobbit', 'John Ronald Reuel Tolkien', 2000, 300);
print $physicalBook->getInfo() . PHP_EOL;


