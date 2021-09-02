<?php
//僵尸进程的产生
$i_pid = pcntl_fork();
if (0 == $i_pid) {
    //子进程10秒后退出
    sleep(10);
} else if ($i_pid > 0) {
    //父进程1000秒后退出
    sleep(1000);
}