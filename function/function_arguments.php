<?php
function test(...$param) {
    var_dump($param);
}

$a = '1234234';

test($a);
test(12, 34, 56);