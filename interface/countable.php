<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2017/12/18
 * Time: 下午1:38
 */
class Dog implements Countable {
    public function count()
    {
        // TODO: Implement count() method.
        return 2;
    }
}

$dog = new Dog();
echo count($dog);