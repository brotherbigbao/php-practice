<?php

$data = ['name-1' => ['a' => 1, 'b' => 2, 'c' => 3]];
$key = [
    'name' => 'name-w',
    'age' => 'age-1',
];

//变量$key下标不存在时用isset()也会报错
if (isset($data[$key['namex']]['w'])) {
    echo "exist\n";
} else {
    echo "not found\n";
}

//$key下标存在，即使$data下标不存在也不会报错
if (isset($data[$key['name']]['w'])) {
    echo "exist\n";
} else {
    echo "not found\n";
}


//结论: isset(), ??, empty() 等操作符  只对主变量有效, 子变量下标不存在仍会报 "Undefined index"