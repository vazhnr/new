<?php

class A
{

    protected $name = 'w';
    protected $surname = 'sdsdasdas';

    public function plus()
    {
        return $this->name + $this->surname;
    }

    public function __get($name)
    {
        if (property_exists($this, $name))
            return $this->$name;
    }

    public function __set($name, $value)
    {
        if(property_exists($this, $name))
            $this->$name = $value;
    }
}
ыыывывы ывывы

ывывывыв

$n = new A();
$n->name = 5;
echo $n->name;
