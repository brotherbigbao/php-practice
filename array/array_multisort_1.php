<?php
$a = [
    ['id' => 99, 'name' => 'liuyibao99', 'start_date' => '2020-04-08', 'start_time' => '12:30'],
    ['id' => 88, 'name' => 'liuyibao88', 'start_date' => '2020-04-02', 'start_time' => '14:30'],
    ['id' => 91, 'name' => 'liuyibao91', 'start_date' => '2020-04-09', 'start_time' => '08:30'],
    ['id' => 33, 'name' => 'liuyibao33', 'start_date' => '2020-04-08', 'start_time' => '07:30'],
    ['id' => 101, 'name' => 'liuyibao101', 'start_date' => '2020-04-08', 'start_time' => '17:30'],
    ['id' => 120, 'name' => 'liuyibao120', 'start_date' => '2020-04-02', 'start_time' => '13:30'],
];

$startDate = array_column($a, 'start_date');
$startTime = array_column($a, 'start_time');

print_r($startDate);
print_r($startTime);

array_multisort($startDate, SORT_DESC, $startTime, SORT_ASC, $a);


print_r($startDate);
print_r($startTime);
print_r($a);