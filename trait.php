<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 16-11-18
 * Time: 上午9:43
 */
trait MyTrait {
    protected $name='';
    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
}

class Students{
    use MyTrait;
}

$stu = new Students();
$stu->setName('hello');
echo $stu->getName();