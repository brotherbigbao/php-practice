<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/2/5
 * Time: 下午5:04
 */
class A {
    private $val;
    function __construct($val)
    {
        $this->val = $val;
    }

    function getClosure() {
        return function () {
            return $this->val;
        };
    }
}

$ob1 = new A(1);
$ob2 = new A(2);

$cl = $ob1->getClosure();
echo $cl(), PHP_EOL;

$cl = $cl->bindTo($ob2);
echo $cl(), PHP_EOL;