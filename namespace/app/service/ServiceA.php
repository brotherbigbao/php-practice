<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/7/2
 * Time: 14:07
 */

namespace app\service;

class ServiceA
{
    public static function output()
    {
        echo "This is Service A.";
        ServiceB::output();
    }
}