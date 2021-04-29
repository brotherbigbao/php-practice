<?php


class ClassA
{
    public $name = '';

    public $age = 0;

    public $sex = '';
}


$str = 'O:6:"ClassA":2:{s:4:"name";s:8:"liuyibao";s:3:"age";i:31;}';
$obj = unserialize($str);
var_dump($obj);