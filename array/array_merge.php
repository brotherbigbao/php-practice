<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/6/1
 * Time: 上午9:52
 */

$a = [

];

$b = array_merge($a, [['>=','time_from', " 00:00:00" ], ['<=','time_from', " 23:59:59" ]]);

print_r($a);

print_r($b);
