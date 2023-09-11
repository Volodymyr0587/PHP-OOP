<?php

require_once 'Song.php';

$song = new Song('Master of puppets', 100);

$song->setRating(4.5);
$song->setRating(44.9); // set to 5
$song->setRating(-4.9); // set to 0


print $song->getRating() . PHP_EOL;