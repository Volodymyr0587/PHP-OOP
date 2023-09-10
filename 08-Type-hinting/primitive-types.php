<?php

//* booolean
//* integer
//* float
//* string
//* object
//* resource
//* array
//* null

declare(strict_types=1);

require_once 'Song.php';

$song = new Song('Seek and destroy', 6583);

var_dump($song->name);