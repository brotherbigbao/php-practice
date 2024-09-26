<?php
function getParams()
{
    $v = func_get_args();
    var_dump($v);
}

getParams(1,3,5);

getParams([1,3,5]);

getParams(...[1,3,5]);