<?php

class A{
    public $name = 'liuyibao';
    private $age = 18;
    public $like = [
        'play', 'watch tv', 'other'
    ];
}

$a = new A();
echo json_encode($a);