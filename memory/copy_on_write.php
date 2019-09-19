<?php
function getA() {
    $a = [];
    for ($i=0; $i<1000000; $i++) {
        $a[] = $i;
    }
    echo memory_get_usage(), "\n";
    return $a;
}

$b = getA();
echo memory_get_usage(), "\n";

//$b = getA();
//echo memory_get_usage(), "\n";

//$b[0] = 999;
//echo memory_get_usage(), "\n";


