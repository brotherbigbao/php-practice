<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2017/12/14
 * Time: 上午10:48
 */

class Test{
    public $a = 'a';
}

// 对象不能有数字属性
$t = new Test();
$b = 123;
$t->$b = 4;

var_dump($t);

echo $t->$b, "\n";