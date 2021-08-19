<?php
echo "\033c";

do {
    echo "-\n";
    sleep(1);
    echo "\033c";
    echo "|\n";
    sleep(1);
    echo "\033c";
} while(true);

//echo "\033c";
