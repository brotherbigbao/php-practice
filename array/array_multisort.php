<?php
$a = [
    ['id' => 99, 'name' => 'liuyibao99'],
    ['id' => 88, 'name' => 'liuyibao88'],
    ['id' => 91, 'name' => 'liuyibao91'],
    ['id' => 33, 'name' => 'liuyibao33'],
    ['id' => 101, 'name' => 'liuyibao101'],
    ['id' => 120, 'name' => 'liuyibao120'],
];

$ids = [];
foreach ($a as $item) {
    $ids[] = $item['id'];
}

array_multisort($ids, SORT_DESC, $a);

print_r($ids);
print_r($a);