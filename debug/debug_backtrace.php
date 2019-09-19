<?php
/**
 * Created by PhpStorm.
 * @Author: liuyibao@styd.cn
 * @CreateTime 2019-06-24 11:44:59
 */

class A {
    public function doSomething()
    {
        echo "class a \n";
        $b = new B();
        $b->doSomething();
    }
}

class B {
    public function doSomething()
    {
        echo "class b \n";
        $c = new C();
        $c->doSomething();
    }
}

class C {
    public function doSomething()
    {
        echo "class c \n";
        $d = new D();
        $d->doSomething();
    }
}

class D {
    public function doSomething()
    {
        echo "class d \n";
        $trace = debug_backtrace();
        print_r($trace);
    }
}


$object = new A();
$object->doSomething();