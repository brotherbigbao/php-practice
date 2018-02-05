<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 16-11-22
 * Time: 下午5:06
 */
function safeException(Exception $e){
    echo $e->getMessage(), PHP_EOL;
}
function safeExceptions(Exception $e){
    echo $e->getMessage(), PHP_EOL;
}

$return = set_exception_handler('safeException');
var_dump($return);

$returns = set_exception_handler('safeExceptions');
var_dump($returns);

throw new Exception('This is a sample.');