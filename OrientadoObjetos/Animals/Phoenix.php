<?php

class Phoenix
{
    //1. Atributos (Estados)
    private string $name;
    private $age = 1;

    //2. Constructor
    public function __construct($name, $age)
    {
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
    
    public function happyBirthday(){
        if($this->age <= -1){
            return false;
        } else {
            $this->age++;  
            return $this->age;
        }
        
    }
}