<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 16-11-18
 * Time: 下午2:32
 */

function enclosePerson($name)
{
    return function ($doSomething) use ($name) {
        return sprintf('%s, %s', $name, $doSomething);
    };
}

$clay = enclosePerson('liuyibao');

echo $clay('come here.');