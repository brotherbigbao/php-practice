<?php
$data = [
    ['serial_num' => '100'],
    ['serial_num' => 'A123'],
    ['serial_num' => 'B45'],
    ['serial_num' => 'b45'],
    ['serial_num' => 'A8'],
    ['serial_num' => '-50'],
    ['serial_num' => 'XYZ'],
    ['serial_num' => '200'],
    ['serial_num' => 'A99']
];

usort($data, function($a, $b) {
    //return strnatcmp($a['serial_num'], $b['serial_num']);
    return strnatcasecmp($a['serial_num'], $b['serial_num']);
});

echo "通过 usort 和 strnatcmp 排序的结果:\n";
foreach ($data as $item) {
    echo $item['serial_num'] . "\n";
}