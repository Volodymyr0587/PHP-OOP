<?php

require_once "Book.php";

$physicalBook = new Book('The Hobbit', 'John Ronald Reuel Tolkien', 2300);
$digitalBook = new Book('The Hobbit', 'John Ronald Reuel Tolkien', 2300);

print $physicalBook->getAuthor() . PHP_EOL;
print $digitalBook->getAuthor() . PHP_EOL;

print $physicalBook->getFileSize() . PHP_EOL;
print $digitalBook->getWeight() . PHP_EOL;