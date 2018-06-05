<?php

var_dump(error_reporting());

//error_reporting() 设置将不会起到作用而你的错误处理函数继续会被调用 —— 不过你仍然可以获取 error_reporting 的当前值，并做适当处理。
//需要特别注意的是带 @ error-control operator 前缀的语句发生错误时，这个值会是 0。
//http://php.net/manual/zh/function.set-error-handler.php
set_error_handler(function($errno, $errstr, $errfile, $errline){
    echo $errno, "\n";
    echo $errstr, "\n";
    echo $errfile, "\n";
    echo $errline, "\n";
});

//echo $xxx;

echo PHP_INT_MAX;