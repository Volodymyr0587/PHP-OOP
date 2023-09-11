<?php

require_once 'Book.php';
require_once 'PhysicalBook.php';


$book = new PhysicalBook('Hobbit', 500);
print $book->getTitle() . PHP_EOL;
print $book->write() . PHP_EOL;