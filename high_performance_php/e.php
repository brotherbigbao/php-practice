<?php
//僵尸进程的管理
$i_pid = pcntl_fork();
if (0 == $i_pid) {
    //在子进程中
    for($i=1; $i<=10; $i++) {
        sleep(1);
        echo '子进程PID' . posix_getpid() . '倒计时:' . $i . PHP_EOL;
    }
} else if ($i_pid > 0) {
    $i_ret = pcntl_wait($status);
    echo $i_ret . ' : ' . $status . PHP_EOL;
    //while保持父进程不退出
    while (true) {
        sleep(1);
    }
}