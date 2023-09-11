<?php

require_once 'Counter.php';
require_once 'Connection.php';

// Counter::$count++;
// Counter::$count++;
// Counter::$count++;
// Counter::$count++;

// print Counter::$count . PHP_EOL;

$connection1 = new Connection();
print Connection::$count . PHP_EOL; // 1
$connection2 = new Connection();
print Connection::$count . PHP_EOL; // 2
$connection3 = new Connection();
print Connection::$count . PHP_EOL; // 3
