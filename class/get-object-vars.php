<?php


class ObjectA
{
    public $name = '';

    public $age = 0;

    /**
     * @var null
     */
    public $company = null;

    public function __toString(): string
    {
        $array = get_object_vars($this);
        return json_encode($array, JSON_UNESCAPED_UNICODE);
    }

    public static function createFromJson(string $json)
    {
        $arr = json_decode($json, true);
        var_dump($arr);
        return new self();
    }
}

class Company {
    public $name = 'santi';

    public $years = 3;
}

$objectA = new ObjectA();
$objectA->name = 'liuyibao';
$objectA->age = 31;
$objectA->company = new Company();
echo $objectA;

$createFrom = ObjectA::createFromJson('{"name":"liuyibao","age":31,"company":{"name":"santi","years":3}}');