<?php
include 'A.php';
include 'B.php';



$a = new \Test\A();
echo $a->getName();

echo "\n";

$object = new \Test\B();
echo $object->getName();

echo "\n";