<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/9/21
 * Time: 15:01
 */

class ClassA
{
    public function methodA()
    {
        echo "this is method a \n";
        $this->methodB();
    }

    private function methodB()
    {
        echo "this is method b \n";
    }
}

class ClassB extends ClassA
{
    public function methodA()
    {
        parent::methodA();
        $this->methodB();
    }

    private function methodB()
    {
        echo "this is new method b\n";
    }
}

$obj = new ClassB();
$obj->methodA();