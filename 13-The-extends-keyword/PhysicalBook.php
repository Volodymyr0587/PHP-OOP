<?php

require_once "Book.php";

class PhysicalBook extends Book
{
    public $weight;

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getInfo(): string
    {
        return "{$this->title}, {$this->author}, Weight: {$this->getWeight()}";
    }
}