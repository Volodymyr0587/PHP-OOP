<?php

class Playlist
{
    public $songs = [];

    public function addSong(Song $song)
    {
        $this->songs[] = $song;
    }

    public function getNumberOfSongs()
    {
        return count($this->songs);
    }
}
