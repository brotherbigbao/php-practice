<?php

$logFile = __DIR__ . '/yii2_log.txt';
if (($fp = @fopen($logFile, 'a')) === false) {
    echo "open fail.\n";
}

var_dump($fp);

$lock = @flock($fp, LOCK_EX);

var_dump($lock);

sleep(10);

$writeResult = @fwrite($fp, 'hello hello world!');
var_dump($writeResult);

@flock($fp, LOCK_UN);
@fclose($fp);

echo 'end';