<?php
<<phpAttribute>>
class MyAttribute {
    public function __construct($name, $value)
    {
        var_dump($name);
        var_dump($value);
    }
}

<<MyAttribute("See", "https://www.baidu.com")>>
<<MyAttribute("Test", "www.test.com")>>
function dummy($argument) {
}
$ref = new ReflectionFunction("dummy");
$ref->getAttributes("MyAttribute")[0]->newInstance();
$ref->getAttributes("MyAttribute")[1]->newInstance();