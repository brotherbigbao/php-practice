<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 16-11-18
 * Time: 上午9:51
 */

function myGenerator(){
    yield 'hello1';
    yield 'hello3';
    yield 'hello4';
}
foreach (myGenerator() as $yieldValue) {
    echo $yieldValue;
}

$start = microtime(true);
function makeRange(){
    for($i=0; $i<300000; $i++){
        yield $i;
    }
}
foreach (makeRange() as $yieldValue){
    echo $yieldValue;
    echo "\n";
}
$end = microtime(true);
echo $start-$end;