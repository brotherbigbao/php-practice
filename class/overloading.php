<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/4/24
 * Time: 上午11:56
 */
class A{
    public function say()
    {
        echo 'this is a', "\n";
    }
}

class B extends A {
    public function say($name)
    {
        echo 'this is b'.$name, "\n";
    }
}


$b = new B();
$b->say('liuyibao');