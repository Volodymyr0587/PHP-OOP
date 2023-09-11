<?php

require_once 'BaseClass.php';
require_once 'SubClass.php';

$baseObject = new BaseClass();
// print $baseObject->publicProperty . PHP_EOL;

$subObject = new SubClass();
// print $subObject->publicProperty . PHP_EOL;

print $baseObject->getProtectedProperty() . PHP_EOL;
print $subObject->getProtectedProperty() . PHP_EOL;

print $subObject->getParentProtectedProperty() . PHP_EOL;
