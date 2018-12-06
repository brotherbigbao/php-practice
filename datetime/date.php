<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/12/6
 * Time: 15:05
 */

//ISO 8601 2004-02-12T15:19:21+08:00, 这种格式存储了时区格式
//http://php.net/manual/en/function.date.php
//elasticsearch存储时间格式时最好用这个，不然存储的可能是string类型
echo date('c');