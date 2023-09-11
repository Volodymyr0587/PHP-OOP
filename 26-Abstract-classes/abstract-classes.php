<?php

require_once 'Book.php';
require_once 'PhysicalBook.php';

// $book = new Book(); //! PHP Fatal error:  Uncaught Error: Cannot instantiate abstract class Book

$book = new PhysicalBook('Hobbit', 500);
print $book->getTitle() . PHP_EOL;