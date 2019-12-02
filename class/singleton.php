<?php


class A
{
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}

$obj = A::getInstance();

var_dump($obj);