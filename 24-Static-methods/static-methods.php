<?php

require_once 'Connection.php';

print Connection::getCount() . PHP_EOL; //* 0

$connection = new Connection();

print Connection::getCount() . PHP_EOL; //* 1
