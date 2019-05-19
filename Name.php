<?php

namespace ONE;


class Name
{
    private $name;

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }
}