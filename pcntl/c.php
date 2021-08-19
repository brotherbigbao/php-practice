<?php
for ($i=1; $i<=3; $i++) {
    $i_pid = pcntl_fork();
    if ( 0 == $i_pid) {
        echo '@子进程' . posix_getpid() . ', 父进程是' . posix_getppid() . PHP_EOL;
    }
}