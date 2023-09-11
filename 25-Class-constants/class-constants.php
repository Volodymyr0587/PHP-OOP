<?php

require_once 'Http.php';

print Http::CREATED . PHP_EOL; // 201
print Http::NOT_FOUND . PHP_EOL; // 404
print Http::OK . PHP_EOL; // 200

// The constant cannot be changed
// Http::NOT_FOUND = 500; //! Parse error 