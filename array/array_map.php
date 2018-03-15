<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 16-11-18
 * Time: 上午10:43
 */

$a = [8, 3, 4, 2, 6, 5, 4, 4, 2];

$newArr = array_map(function ($val) {
    return $val * 10;
}, $a);
print_r($newArr);

$b = [3, 4, 9, 2, 3, 5, 2, 0, 7, 7];//两个数组元素数量不一致不会报错
$newArr = array_map(function ($val1, $val2) {
    return $val1 * $val2;
}, $a, $b);
print_r($newArr);

//批量删除
array_map('unlink', glob('*.txt'));