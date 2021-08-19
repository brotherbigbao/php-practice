<?php
$s_slogan = "Hello, I'm from ";
$i_pid = pcntl_fork();

if (0 == $i_pid) {
    $s_slogan .= "child process";
    echo $s_slogan . " | 子进程PID：" . posix_getpid() . " | 父进程PID：" . posix_getppid() . PHP_EOL;
} elseif ($i_pid > 0) {
    $s_slogan .= "father process";
    echo $s_slogan . ' | 子进程:' . $i_pid . ' | 当前进程PID: ' . posix_getpid() . PHP_EOL;
} ELSE {
    throw new Exception('Exception: pcntl_fork error');
}