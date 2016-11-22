<?php
/**
 * Created/home/liuyibao/Code/xadmin by PhpStorm.
 * User: liuyibao
 * Date: 16-11-21
 * Time: 上午9:51
 */
$string = file_get_contents('http://www.ffan.com');
//echo $string, PHP_EOL;

echo htmlentities($string, ENT_QUOTES, 'UTF-8'), PHP_EOL;