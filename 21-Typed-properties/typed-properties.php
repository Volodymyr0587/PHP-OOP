<?php

require_once 'Song.php';

$songTitles = ['Orion', 'Enter sandman', 'Master of puppets'];

$song = new Song($songTitles[0], 100);

// $song->name = $songTitles; //! Uncaught TypeError: Cannot assign array to property Song::$name of type string 
$song->name = $songTitles[1];

var_dump($song->name);