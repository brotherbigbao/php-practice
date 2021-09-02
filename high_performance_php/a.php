<?php
//socket_accept 现在没有惊群问题
$server_socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_bind($server_socket, '0.0.0.0', 8989);
socket_listen($server_socket);
for ($i=0; $i<5; $i++) {
    $pid = pcntl_fork();
    if ($pid < 0) {
        exit('fork 失败');
    } else if ($pid == 0) {
        // 这里是子进程
        $pid = posix_getpid();
        printf("worker[%d] running\n", $pid);
        while (true) {
            $conn_socket = socket_accept($server_socket);
            if (!$conn_socket) {
                printf("worker[%d] 接收新连接失败，原因：%s\n",$pid, socket_last_error($conn_socket));
            }
            socket_getpeername($conn_socket, $address, $port);
            printf("worker[%d] 接收新连接成功:%s:%d\n", $pid, $address, $port);
            socket_close($conn_socket);
        }
    }
}

while (true) {
    pcntl_signal_dispatch();
    $pid = pcntl_wait($status, WUNTRACED);
    pcntl_signal_dispatch();
    if ($pid > 0) {
        printf("worker[%d] 退出\n", $pid);
    }
}