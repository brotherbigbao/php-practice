<?php
class A {
    public $name = 'test name';
}

$a = new A();

if (isset($a->sex)) {
    echo $a->sex;
} else {
    echo "not exists";
}

if (empty($a->sex)) {
    echo "empty check is ok";
}