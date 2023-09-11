<?php

class Song
{
    public string $name;
    public int $numberOfPlays;

    /**
     * Song rating from 0 to 5
     * Half ratings allowed e.g. 3.5
     */
    private int|float $rating;

    public function __construct(string $name, int $numberOfPlays)
    {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }

    public function setRating(int|float $rating): void
    {
        // If < 0. set to 0
        $rating = max(0, $rating);
        // If > 5, set to 5
        $this->rating = min(5, $rating);
    }

    public function getRating(): int|float
    {
        return $this->rating;
    }
}
