<?php

class Employee
{

    public function __construct(
        protected string $name,
        protected string $surname,
        protected float $salary = -1
    ) {
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

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    public function __toString(){
        return "-Nombre del Empleado: " . $this->getName() .
        " -Apellido del Empleado: ". $this->getSurname() . 
        " -Salario del empleado: ". $this->getSalary();
    }
}