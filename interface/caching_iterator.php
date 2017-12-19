<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2017/12/18
 * Time: 下午5:35
 */

$array = new ArrayIterator(range(1, 100));
print_r($array);
$cache = new CachingIterator($array, CachingIterator::FULL_CACHE);
var_dump($cache);