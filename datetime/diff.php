<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/2/5
 * Time: 下午5:54
 */
$before = new DateTime('2017-10-10');
$today = new DateTime('2018-01-26');
echo $today->diff($before)->days, "\n";

$before = new DateTime('2018-06-30');
$today = new DateTime('2020-08-31');
echo $today->diff($before)->m, "\n"; //还是2，不是所有的月数，够12个月就加到年了