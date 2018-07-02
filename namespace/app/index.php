<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/7/2
 * Time: 14:11
 */
namespace app;

use app\service\ServiceA;

include_once "service/ServiceA.php";
include_once "service/ServiceB.php";
include_once "model/ServiceA.php";

ServiceA::output();

