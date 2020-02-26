<?php
$str = preg_replace('/^https?/', 'https', 'https://www.baidu.com/');
echo rtrim($str, '/');