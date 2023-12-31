<?php

class PhysicalBook
{
    public $title;
    public $author;
    public $price;
    public $weight;


    public function __construct(
        string $title,
        string $author,
        int $price,
        int $weight = 0,
    ) 
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price; // cents
        $this->weight = $weight;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getPriceAsCurency(): string 
    {
        return '$' . $this->price / 100;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getInfo(): string
    {
        return "{$this->title}, {$this->author}, Weight: {$this->getWeight()}";
    }
}