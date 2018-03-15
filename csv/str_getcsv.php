<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/3/8
 * Time: 下午3:53
 */
$csv = array_map('str_getcsv', file('file.csv'));
print_r($csv);