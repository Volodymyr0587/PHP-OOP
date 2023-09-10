<?php

require_once 'Playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song1 = new Song('Hit the light', 100);
// $song2 = 'Nothing else metters';
$song2 = new Song('Nothing else metters', 3000);

$playlist->addSong($song1);
$playlist->addSong($song2);

// print $playlist->getNumberOfSongs() . PHP_EOL;
foreach ($playlist->songs as $song) {
    print $song->name . PHP_EOL;
}