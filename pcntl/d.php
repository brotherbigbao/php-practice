<?php
$o_redis = new Redis();
$o_redis->connect('127.0.0.1', 6379);

for ($i=1; $i<=3; $i++) {
    $i_pid = pcntl_fork();
    if (0 == $i_pid) {
        //使用while保证三个子进程不会退出
        while (true) {
            sleep(1);
        }
    }
}

while (true) {
    sleep(1);
}