<?php
$fp = stream_socket_client('tcp://127.0.0.1:7777', $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno) \n";
} else {

    fwrite($fp, "this is a test");
    while (!feof($fp)) {
        echo fgets($fp, 1024);
    }
    fclose($fp);
}