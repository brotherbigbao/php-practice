<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 17-2-9
 * Time: 下午5:20
 */

function test($name, $age) {
    $v = func_get_args();
    var_dump($v);
}

test('liuyibao', 28);