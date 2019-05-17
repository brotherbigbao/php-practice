<?php
namespace hello;

/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2019/5/17
 * Time: 15:37
 */
class P {

    protected static $instance = [];

    public static function getInstance()
    {
        if (isset(self::$instance[get_called_class()]) && self::$instance[get_called_class()]) {
            return self::$instance[get_called_class()];
        }
        self::$instance[get_called_class()] = new static();
        return self::$instance[get_called_class()];
    }


    public function sayHello()
    {
        echo "Hello, i am P\n";
    }
}

class C1 extends P{
    public function sayHello()
    {
        echo "Hello, i am C1\n";
        print_r(self::$instance);
    }
}

class C2 extends P{
    public function sayHello()
    {
        echo "Hello, i am C2\n";
        print_r(self::$instance);
    }
}

$c1 = C1::getInstance();
$c1->sayHello();

$c2 = C2::getInstance();
$c2->sayHello();