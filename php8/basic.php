<?php
<<Params("Foo", "argument")>>
<<See("https://www.baidu.com")>>
function dummy($argument) {}

$ref = new ReflectionFunction("dummy");

var_dump($ref->getAttributes("See")[0]->getName());
var_dump($ref->getAttributes("See")[0]->getArguments());

var_dump($ref->getAttributes("Params")[0]->getName());
var_dump($ref->getAttributes("Params")[0]->getArguments());