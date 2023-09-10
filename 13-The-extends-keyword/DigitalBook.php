<?php

require_once "Book.php";

class DigitalBook extends Book
{
    public $fileSize;

    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function getInfo(): string
    {
        return "{$this->title}, {$this->author}, FileSize: {$this->getFileSize()}";
    }
}