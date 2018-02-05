<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/2/5
 * Time: 下午5:16
 * array_walk 回调中最好用引用，不然感觉用处不大
 */
$a = ['my', 'name', 'is', 'liuyibao'];
array_walk($a, function(&$val){
    $val .= 'ok';
});
print_r($a);