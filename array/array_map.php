<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 16-11-18
 * Time: 上午10:43
 */

$arr = [8, 3, 4, 2, 6, 5, 4, 4, 2];
$newArr = array_map(function ($val) {
    return $val * 10;
}, $arr);
print_r($newArr);