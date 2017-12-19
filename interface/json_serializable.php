<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2017/12/18
 * Time: 上午11:58
 */
Class Dog implements JsonSerializable, Countable {
    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        return [
            'name' => 'Liuyibao',
            'age' => 28
        ];
    }

    public function count()
    {
        // TODO: Implement count() method.
        return 1;
    }
}

$dog = new Dog();
echo json_encode($dog);
echo count($dog);