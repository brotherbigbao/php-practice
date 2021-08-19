<?php
$i_pid = pcntl_fork();

if (0 == $i_pid) {
    echo 'I am in child process' . PHP_EOL;
} elseif ($i_pid > 0) {
    echo 'I am in father process' . PHP_EOL;
} ELSE {
    throw new Exception('Exception: pcntl_fork error');
}