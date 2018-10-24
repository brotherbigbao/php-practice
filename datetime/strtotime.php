<?php
$curr_date = date('2018-8-31');
echo $curr_date. "\r\n";
echo date('Y-m-d', strtotime('last day of next month '.$curr_date));