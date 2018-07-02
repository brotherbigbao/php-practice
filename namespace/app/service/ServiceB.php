<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/7/2
 * Time: 14:08
 */

namespace app\service;

use app\model\ServiceA;

class ServiceB
{
    public static function output()
    {
        echo "This is Service B.";
        //\app\model\ServiceA::output();//这样写是可以的
        ServiceA::output();
    }
}