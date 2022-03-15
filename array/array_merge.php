<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/6/1
 * Time: 上午9:52
 */

//$a = [
//
//];
//
//$b = array_merge($a, [['>=','time_from', " 00:00:00" ], ['<=','time_from', " 23:59:59" ]]);
//
//print_r($a);
//
//print_r($b);



$a = ['name' => 'liuyibao', 'age' => '123456'];
$b = ['name' => 'iphone', 'age' => '122'];

$c = array_merge($a, $b);
print_r($c);

$c = $a + $b;
print_r($c);



$j = [
    ['name' => 'liuyibao', 'age' => '123456']
];

$k = [
    ['name' => 'iphone', 'age' => '122']
];

$x = array_merge($j, $k);
print_r($x);

$x = $j + $k;
print_r($x);