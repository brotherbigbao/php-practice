<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/3/8
 * Time: 下午3:39
 */
$list = array (
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);

$fp = fopen('file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);