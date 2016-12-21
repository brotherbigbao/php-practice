<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 16-12-16
 * Time: 上午11:32
 * Description: copy text from word excel to php array
 */
$handle = fopen('source', 'r');
$targetHandle = fopen('target', 'w');
while(($line = fgets($handle, 2048)) !== false){
    //echo $line, PHP_EOL;
    $matches = [];
    if(preg_match('/(\w+)\t(.+)\n?/', $line, $matches)) {
        $str = "'$matches[1]' => '$matches[2]'\n";
        echo $str;
        fwrite($targetHandle, $str);
    }
}
fclose($handle);
fclose($targetHandle);