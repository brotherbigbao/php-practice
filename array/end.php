<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/12/7
 * Time: 13:29
 */

$arr = [
    'name' => 'liuyibao',
    'age' => 30,
    'mobile' => '18888881111'
];

$a = next($arr);

echo $a, "\n";

foreach ($arr as $val) {
    echo $val, "\n";
}