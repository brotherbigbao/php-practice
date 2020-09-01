<?php

$data = ['name-1' => ['a' => 1, 'b' => 2, 'c' => 3]];
$key = [
    'name' => 'name-1',
    'age' => 'age-1',
];

echo ($data['name-1']['x'] ?? 'not found'), "\n\n";

if (isset($data[$key['names']]['w'])) {
    echo "is empty\n";
}