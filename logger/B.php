<?php


namespace Test;


class B extends A
{
    public function getName()
    {
        //return __CLASS__;
        return get_called_class();
    }
}