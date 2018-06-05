<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/4/26
 * Time: 下午7:11
 */
/*
 * https://www.christophh.net/2012/07/24/php-socket-programming/
 * nc 127.0.0.1 7777
 */
$socket = stream_socket_server("tcp://127.0.0.1:7777", $errno, $errstr);

if (!$socket) {
    echo "$errstr ($errno)\n";
} else {
    while ($conn = stream_socket_accept($socket)) {
        fwrite($conn, 'The local time is ' . date('Y-m-d H:i:s') . "\n");
        //fclose($conn);
    }
    fclose($socket);
}