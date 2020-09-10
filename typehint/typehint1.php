<?php
function test(int $a) {
    var_dump($a);
}

test(3.1415926); //不会报错

test(intval('')); //不会报错

test(''); //会报错

// 结论1：虽然不是严格模式，但类型完全不同（比如要求整型但给字符串），也会报错。
// 结论2：int 和 float 会隐式转换