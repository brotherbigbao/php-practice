<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2017/12/18
 * Time: 下午1:43
 */
class Dog implements ArrayAccess {
    protected $attributes = [
        'name' => 'heihei',
        'age' => 3,
        'color' => 'black'
    ];

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
        if (!$offset) {
            return;
        }
        return isset($this->attributes[$offset]);
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
        if (!$offset) {
            return;
        }
        return isset($this->attributes[$offset]) ? $this->attributes[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
        if (!$offset) {
            return;
        }
        $this->attributes[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
        if (isset($this->attributes[$offset])) {
            unset($this->attributes[$offset]);
        }
    }
}

$dog = new Dog();
echo $dog['name'], $dog['age'], $dog['color'], "\n";