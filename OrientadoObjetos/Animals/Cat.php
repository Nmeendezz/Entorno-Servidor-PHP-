<?php
class Cat
{
    //Atributos
    private String $name;
    private string $color = "color not known";
    private $age;

    //Constructor
    public function __construct($name, $color, $age = 1){
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    //Metodo
    public function miau(){
        return "miaw";
    }
}
?>