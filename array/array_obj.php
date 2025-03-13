<?php
class Hello {
    public $name = 'hello';
}

$a = [
    new Hello(),
    new Hello(),
    new Hello(),
    new Hello(),
    new Hello(),
];

foreach ($a as $item) {
    $item->name .= ' world';
}

foreach ($a as $item) {
    echo $item->name . "\n";
}