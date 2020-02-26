<?php

trait ATrait {
    protected static $instance = null;

    /**
     * @return static
     */
    public static final function getInstance()
    {
        if (static::$instance == null) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}

class B {

    use ATrait;

    public function getName()
    {
        echo "this is b.\n";
    }
}

class C {

    use ATrait;

    public function getName()
    {
        echo "this is c.\n";
    }
}

$b = B::getInstance();
$b->getName();

$c = C::getInstance();
$c->getName();

$equal = ($b === $c);
var_dump($equal);