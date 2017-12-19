<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2017/3/27
 * Time: 上午10:52
 */
while (true) {
    sleep(5);
    echo file_get_contents('./target/target.txt'), "\n";
}