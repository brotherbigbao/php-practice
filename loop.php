<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 16-11-18
 * Time: 上午10:12
 */
$start = microtime(true);
function makeRange(){
    $arr = [];
    for($i=0; $i<300000; $i++){
        $arr[] = $i;
    }
    return $arr;
}
foreach (makeRange() as $yieldValue){
    echo $yieldValue;
    echo "\n";
}
$end = microtime(true);
echo $start-$end;