<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 16-11-21
 * Time: 上午10:34
 */

$dt = new DateTime();
echo $dt->format('Y-m-d H:i:s'), PHP_EOL;

$interval = new DateInterval('P2W');
$dt->add($interval);
echo $dt->format("Y-m-d H:i:s"), PHP_EOL;

$period = new DatePeriod($dt, $interval, 5);
foreach ($period as $d){
    echo $d->format('Y-m-d H:i:s'), PHP_EOL;
}