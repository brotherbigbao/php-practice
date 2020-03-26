<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 16-11-30
 * Time: 上午9:56
 */
//declare(strict_types=1);

function isOld(int $age): string {
    var_dump($age);
    if($age > 35){
        return 'you are old';
    }else{
        return 'you are young';
    }
}

$result = 2;
$result = isOld(3);
//var_dump($result);


$result = isOld('3');
//var_dump($result);