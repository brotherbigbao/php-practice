<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/2/5
 * Time: 下午5:33
 * 在第一个参数小于，等于或大于第二个参数时，该比较函数必须相应地返回一个小于，等于或大于 0 的整数。
 */

$b = [200, 99, 300, 700, 500, 30, 22, 900, 1000];
usort($b, function($v1, $v2){
    return $v1>$v2 ? 1 : ($v1<$v2 ? -1 : 0);
});
print_r($b);

$a = [200, 99, 300, 700, 500, 30, 22, 900, 1000];
//可以实现倒序排序,但不易懂,不建议使用 true会转为1, false会转为0
usort($a, function($v1, $v2){
    return $v1 < $v2;
});
print_r($a);