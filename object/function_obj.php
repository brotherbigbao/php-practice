<?php
class Hello {
    public $name = 'hello';
}

function checkOjb(Hello $h)
{
    $newH = new Hello();
    $newH->name = 'i m new';
    $h = $newH;
}

$a = new Hello();

echo spl_object_hash($a), "\t", $a->name, "\n";

checkOjb($a);

echo spl_object_hash($a), "\t", $a->name, "\n";


/**
➜  object git:(master) ✗ php function_obj.php
000000002b0a4ad1000000004132a638        hello
000000002b0a4ad1000000004132a638        hello
 */