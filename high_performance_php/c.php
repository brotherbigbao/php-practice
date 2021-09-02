<?php
//子进程由init收养
$i_pid = pcntl_fork();
if (0 == $i_pid) {
    for ($i=1; $i <= 10; $i++) {
        sleep(1);
        echo '我的父进程是: ' . posix_getppid() . PHP_EOL;
    }
} else if ($i_pid > 0) {
    sleep(2);
}