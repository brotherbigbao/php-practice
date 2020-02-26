<?php

class A {
    protected static $instance = [];

    public static function getInstance()
    {
        if (isset(self::$instance[get_called_class()]) && self::$instance[get_called_class()]) {
            return self::$instance[get_called_class()];
        }
        self::$instance[get_called_class()] = new static();
        return self::$instance[get_called_class()];
    }
}

class B extends A {

    public function getName()
    {
        echo "this is b.\n";
        echo "class name is " . static::class,"\n";
    }
}

class C extends A {

    public function getName()
    {
        echo "this is c.\n";
        echo "class name is " . static::class,"\n";
    }
}

$b = B::getInstance();
$b->getName();

$c = C::getInstance();
$c->getName();


$equal = ($b === $c);
var_dump($equal);