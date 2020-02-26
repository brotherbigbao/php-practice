<?php

class A {
    protected static $instance = [];

    public static function getInstance()
    {
        $class_name = static::class;
        if (!isset(static::$instance[$class_name])) {

            static::$instance[$class_name] = new static();
        }
        return static::$instance[$class_name];
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