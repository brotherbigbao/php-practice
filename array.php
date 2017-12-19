<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2017/12/14
 * Time: 上午10:46
 */

#1
$a = [
    100 => 'this is 100 integer',
    '100' => 'this is 100 string',
];

// '100' auto convert to 100, 覆盖了前一个键, 当数字字符串在PHP_INT_MIN与PHP_INT_MAX之间时
echo "#1\n";
var_dump($a);



#2
$obj = new stdClass();
$obj->{'0'} = 1;
$obj->{'1'} = 2;
$obj->{'2'} = 3;
$arr = (array)$obj; //数组中键意外保存了数字字符串，这在数组中是不允许的。正常创建的数组, 数字字符串会转成数字, PHP72已经修复https://wiki.php.net/rfc/convert_numeric_keys_in_object_array_casts
echo "#2\n";
var_dump($arr);
echo $arr['0'];
