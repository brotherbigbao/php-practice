<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/2/24
 * Time: 下午1:31
 */
$a = 1;
$b = 0;

$c = $a && $b;
var_dump($c);

$d = $a AND $b;
var_dump($d);

# &&比赋值运算优先级高, and比赋值运算符优先级低, 具体见php文档