<?php
//https://www.php.net/manual/zh/language.operators.comparison.php#language.operators.comparison.ternary
//表达式 (expr1) ? (expr2) : (expr3) 在 expr1 求值为 TRUE 时的值为 expr2，在 expr1 求值为 FALSE 时的值为 expr3。
//自 PHP 5.3 起，可以省略三元运算符中间那部分。表达式 expr1 ?: expr3 在 expr1 求值为 TRUE 时返回 expr1，否则返回 expr3。
$a = ['name' => 'liuyibao'];
$b = $a['age'] ?? 31;
var_dump($b);


//php7 由于日常使用中存在大量同时使用三元表达式和 isset()的情况， 我们添加了null合并运算符 (??) 这个语法糖。如果变量存在且值不为NULL， 它就会返回自身的值，否则返回它的第二个操作数。
$color = 'green';
$c = $color ? : 32;
var_dump($c);