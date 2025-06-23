<?php

function getAsciiUnitsPlace(string $char)
{
    return ord($char)%10;
    //return ord($char) . ',';
}

$arr = [
    '3243693956544536',
    '3241832809571200',
    '3228692575259681',
    '3212755813974694',
    '3204497179067660',
    '3198862584587737',
    '3197628217627190',
    '3194493176720967',
    '3194036165350205',
    '3185274079759282',
    '3176792358290666',
    '3169802701571284',
    '3165289898954828',
];

foreach ($arr as $i) {
    $h = hash('sha256', $i);

    //echo $h . "\n";

    echo getAsciiUnitsPlace($h[6])
        . getAsciiUnitsPlace($h[9])
        . getAsciiUnitsPlace($h[15])
        . getAsciiUnitsPlace($h[44])
        . getAsciiUnitsPlace($h[47])
        . getAsciiUnitsPlace($h[55]);

    echo "\n";
}

