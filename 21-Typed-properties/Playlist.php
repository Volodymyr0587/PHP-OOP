<?php

require_once 'Song.php';


class Playlist
{
    private $songs = [];

    public function addSongToPLaylist(Song $song): void
    {
        $this->songs[] = $song;
    }

    public function getSongFromPlaylist(): array
    {
        return $this->songs;
    }
}
