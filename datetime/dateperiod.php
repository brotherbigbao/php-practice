<?php
$start = '2018-12-14 08:00:00';
$end = '2018-12-14 23:59:00';
$dateBegin = new \DateTime($start);
$dateEnd = new \DateTime($end);
$interval = new \DateInterval('P1D');
$dateRange = new \DatePeriod($dateBegin, $interval, $dateEnd);
foreach ($dateRange as $date) {
    echo $date->format("Y-m-d"), "\n";
}