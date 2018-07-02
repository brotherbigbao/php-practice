<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/7/2
 * Time: 14:11
 * 测试在php5.6环境下会报错, 在PHP 7.0.18-0ubuntu0.16.04.1环境下运行正常
 * php5下执行, app\service\ServiceB.php文件中假如使用use app\model\ServiceA; 且在之前已经有use app\service\ServiceA;就会报错
 * php5误当成app\service\ServiceB了吧。。。
 * 直接使用绝对命名空间是正常的
 */
/*
PHP Fatal error:  Cannot use app\model\ServiceA as ServiceA because the name is already in use in /Users/liuyibao/Code/php-sharpen/namespace/app/service/ServiceB.php on line 11
PHP Stack trace:
PHP   1. {main}() /Users/liuyibao/Code/php-sharpen/namespace/app/index.php:0

Fatal error: Cannot use app\model\ServiceA as ServiceA because the name is already in use in /Users/liuyibao/Code/php-sharpen/namespace/app/service/ServiceB.php on line 11

Call Stack:
    0.0003     227216   1. {main}() /Users/liuyibao/Code/php-sharpen/namespace/app/index.php:0
*/
namespace app;

use app\service\ServiceA;

include_once "service/ServiceA.php";
include_once "service/ServiceB.php";
include_once "model/ServiceA.php";

ServiceA::output();

