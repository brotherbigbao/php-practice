<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 16-11-22
 * Time: 下午4:09
 */
$handle = fopen('trait.php', 'r');
stream_filter_append($handle, 'string.toupper');
while (feof($handle) !== true){
    echo fgets($handle);
}
fclose($handle);