<?php
//pack https://segmentfault.com/a/1190000008305573
//主机字节序 大端字节序 小端字节序 理解字节序 https://www.ruanyifeng.com/blog/2016/11/byte-order.html

const NUM_A = 1999;
echo "origin:\n";
echo base_convert(NUM_A, 10, 2), "\n";

$b = pack('L*', 1999);
echo "convert:\n";
echo base_convert(ord($b[0]), 10, 2), "\n";
echo base_convert(ord($b[1]), 10, 2), "\n";
echo base_convert(ord($b[2]), 10, 2), "\n";
echo base_convert(ord($b[3]), 10, 2), "\n";