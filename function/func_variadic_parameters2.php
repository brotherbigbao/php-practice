<?php
function getParams(...$p)
{
    $v = func_get_args();
    var_dump($v);
    var_dump($p);
}

getParams(1,3,5);

getParams([1,3,5]);

getParams(...[1,3,5]);