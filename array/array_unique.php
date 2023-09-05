<?php
//二维数组

$a = [
    ['id' => 1003, 'name' => 'bao'],
    ['id' => 1004, 'name' => 'bao'],
    ['id' => 1005, 'name' => 'bao'],
    ['id' => 1004, 'name' => 'bao'],
];

$b = array_unique($a);

print_r($b);