<?php
//pack https://segmentfault.com/a/1190000008305573
//主机字节序 大端字节序 小端字节序 理解字节序 https://www.ruanyifeng.com/blog/2016/11/byte-order.html
//人类习惯读写大端字节序，PC计算机一般使用小端字节序 https://www.jianshu.com/p/1664dcdf83e7

//原始整数的二进制
const NUM_A = 1999;
echo "origin:\n";
echo base_convert(NUM_A, 10, 2), "\n";//11111001111

//使用pack打包成二进制 很明显使用的是小端字节序 计算机是按照字节处理的
$b = pack('L*', 1999);
echo "二进制字符串长度: " . strlen($b) . "\n";

echo "convert:\n";
echo base_convert(ord($b[0]), 10, 2), "\n";//11001111
echo base_convert(ord($b[1]), 10, 2), "\n";//111
echo base_convert(ord($b[2]), 10, 2), "\n";//0
echo base_convert(ord($b[3]), 10, 2), "\n";//0

//尝试用这种办法恢复 将高位数左移然后再拼到一起
$recover = ord($b[0]) | ord($b[1]) << 8 ;
echo $recover;
var_dump($recover);

//echo base_convert($recover, 2, 10);