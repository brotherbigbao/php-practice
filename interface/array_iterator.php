<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2017/12/18
 * Time: 下午5:11
 */
$data = ['liuyibao', 'wulingsheng', 'liyang', 'hengjiabin', 'wangchangchun', 'caozhenhui'];
$iterator = new ArrayIterator($data);
echo $iterator->count();
$iterator->asort();
foreach ($iterator as $item) {
    echo $item, "\n";
}
