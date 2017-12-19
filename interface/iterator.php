<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2017/12/18
 * Time: 下午5:02
 */
class Dogs implements Iterator {
    public function current()
    {
        // TODO: Implement current() method.
        return 1;
    }

    public function next()
    {
        // TODO: Implement next() method.
        return 3;
    }

    public function key()
    {
        // TODO: Implement key() method.
        return 5;
    }

    public function valid()
    {
        // TODO: Implement valid() method.
        return 1;
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
    }

}

$dogs = new Dogs();
foreach ($dogs as $key=>$dog) {
    echo $key, ",", $dog, "\n";
}