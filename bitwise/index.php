<?php
$a = 3;   //011
$b = 4;   //100
$c = 5;   //101
$d = 6;   //110
$e = 8;   //1000
$f = 0b00001000;

$r1 = $a & $b;
var_dump($r1);

$r2 = $a & $c;
var_dump($r2);

$r3 = $a & $d;
var_dump($r3);

$r4 = $e & $f;
var_dump($r4);

if (8 === $f) {
    var_dump('equal');
} else {
    var_dump('not equal');
}


