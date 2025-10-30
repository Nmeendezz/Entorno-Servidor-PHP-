<?php

class Minotauro
{
    public function __construct(
        private $name,
        private $age = 1
    ) {
        $this->name = $name;
        $this->age = $age;

    }


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function __toString(){
        return $this->name . " tiene " . $this->age . " años";
    }
}