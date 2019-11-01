<?php
$list = [
    ['name' => 'a', 'age' => 18],
    ['name' => 'b', 'age' => 30],
    ['name' => 'c', 'age' => 22],
];
$fns = [
    'a' => function($val){ return $val+1; },
    'b' => function($val){ return $val+2; },
    'c' => function($val){ return $val+3; },
];

$result = [];
foreach ($list as $item) {
    if (isset($fns[$item['name']])) {
        $result[] = $fns[$item['name']]($item['age']);
    } else {
        $result[] = 0;
    }
}

print_r($result);