<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 17-3-8
 * Time: 上午10:54
 */
$str = '/v1/api/content?action=getList';
$arr = explode('/', ltrim($str, '/'));
print_r($arr);