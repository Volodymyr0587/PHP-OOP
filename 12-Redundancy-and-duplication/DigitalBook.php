<?php

class DigitalBook
{
    public $title;
    public $author;
    public $price;
    public $fileSize;


    public function __construct(
        string $title,
        string $author,
        int $price,
        int $fileSize = 0,
    ) 
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price; // cents
        $this->fileSize = $fileSize;
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

    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function getInfo(): string
    {
        return "{$this->title}, {$this->author}, FileSize: {$this->getFileSize()}";
    }
}