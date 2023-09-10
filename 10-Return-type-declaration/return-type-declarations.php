<?php

require_once 'Playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song1 = new Song('Hit the light', 100);
$song2 = new Song('Nothing else metters', 3000);

$playlist->addSong($song1);
$playlist->addSong($song2);

if ($playlist->getLength() < 10) {
    print "Short playlist ..." . PHP_EOL;
}