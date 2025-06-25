<?php

function filterSpecialCharsOri($text)
{
    // 只保留中英文 数字 下划线 - .
    $specialCharPattern = '/[^\w\d\-\.]/u';
    return preg_replace($specialCharPattern, '', $text);
}

function filterSpecialChars($text)
{
    // 只保留中英文 数字 下划线 - .
    //$specialCharPattern = '/[^\w\d\-\.]/u';
    //$specialCharPattern = '/[^a-zA-Z0-9_\-.]/u';
    //$specialCharPattern = '/[^a-zA-Z0-9_\-.\p{L}]/u'; //只保留英文 数字 下划线 - . 所有语言的字母

    $specialCharPattern = '/[^a-zA-Z0-9_\-.\p{Han}]/u'; //只保留英文 数字 下划线 - . 汉字
    return preg_replace($specialCharPattern, '', $text);
}

echo filterSpecialCharsOri('helloworld - _  中国englis한 12345'), "\n";
echo filterSpecialCharsOri('中文.。！@#￥%……&*（）_'), "\n";
echo filterSpecialCharsOri('lnès中国englis한'), "\n";

echo "\n\n";

echo filterSpecialChars('helloworld - _  中国englis한 12345'), "\n";
echo filterSpecialChars('中文.。！@#￥%……&*（）_'), "\n";
echo filterSpecialChars('lnès中国englis한'), "\n";