<?php


class ClassA
{
    public $name = 'liuyibao';

    public $age = 31;
}

echo serialize(new ClassA());