<?php

require_once 'Playlist.php';
require_once 'Song.php';

$metallicaSongs = new Playlist();

$song = new Song('Hit the light', 101);
$fakeSong = 'This is not a song.. it is a string';

$metallicaSongs->addSongToPLaylist($song);

var_dump($metallicaSongs->getSongFromPlaylist());