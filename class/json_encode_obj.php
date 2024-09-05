<?php
class A {
    public $name = 'liuyibao';
    public $age = 35;
    public $Message;
}

class Message {
    public $brand_id = 13432423234;
    public $obj_id = 2342432432;
}

$a = new A();
$a->Message = new Message();

echo json_encode([$a], JSON_UNESCAPED_UNICODE);