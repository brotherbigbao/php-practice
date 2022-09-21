<?php
class Cat{
    public $id = 0;
    public $name = '';
    public $hairColor = 'black';
}

$a = new Cat();
$a->id = 1;
$a->name = 'lucy';

$b = new Cat();
$b->id = 2;
$b->name = 'marry';


$c = new Cat();
$c->id = 3;
$c->name = 'joe';

$list = [];
$list[] = $a;
$list[] = $b;
$list[] = $c;

foreach ($list as $obj) {
    $obj->name .= ' xx';
}

foreach ($list as $obj) {
    echo $obj->id;
    echo  "\n";
    echo $obj->name;
    echo "\n\n";
}

echo json_encode($list);