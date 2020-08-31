<?php

$a = 0;
if (empty($a)) {
    echo "0 is empty\n";
}

$b = '0';
if (empty($b)) {
    echo "'0' is empty\n";
}

$c = false;
if (empty($c)) {
    echo "false is empty\n";
}

$d = ' ';
if (empty($d)) {
    echo "' ' is empty\n";
} else {
    echo "' ' is not empty\n";
}