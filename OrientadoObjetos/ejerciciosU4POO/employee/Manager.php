<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/OrientadoObjetos/ejerciciosU4POO/employee/Person.php";

final class Manager extends Person
{
        public function __construct(
                $name,
                $surname,
                $salary,
                $telephones = [],
                private int $seniority = 0
        ) {
                parent::__construct($name, $surname, $salary, $telephones);
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

        public function getTelephones()
        {
                return $this->telephones;
        }

        public function setTelephones($telephones)
        {
                $this->telephones = $telephones;

                return $this;
        }

        public function getSeniority()
        {
                return $this->seniority;
        }

        public function setSeniority($seniority)
        {
                $this->seniority = $seniority;

                return $this;
        }

        // 1er Metodo
        public function getFullName()
        {
                return $this->getName() . " " . $this->getSurname();
        }
        // 2do Metodo
        public function payTaxes()
        {
                if ($this->getSalary() >= 0 && $this->getSalary() <= 12450) {
                        return $this->getSalary() * 0.19;
                } else if ($this->getSalary() >= 12450 && $this->getSalary() <= 20199) {
                        return $this->getSalary() * 0.24;
                } else if ($this->getSalary() >= 20200 && $this->getSalary() <= 35199) {
                        return $this->getSalary() * 0.3;
                } else if ($this->getSalary() >= 35200 && $this->getSalary() <= 59999) {
                        return $this->getSalary() * 0.37;
                } else if ($this->getSalary() >= 60000 && $this->getSalary() <= 299999) {
                        return $this->getSalary() * 0.45;
                } else if ($this->getSalary() >= 300000) {
                        return $this->getSalary() * 0.47;
                } else if ($this->getSalary() == -1) {
                        return -1;
                } else {
                        return $this->getSalary();
                }
        }

        // 3er Metodo
        public function addTelephone($telefono)
        {
                $this->telephones[] = $telefono;
        }

        // 4to Metodo
        public function listTelephones()
        {
                return implode(", ", $this->getTelephones());

        }

        // 5to Metodo
        public function emptyTelephones()
        {
                return array_splice($this->telephones, 0, count($this->getTelephones()));
        }

        // 6to Metodo
        public function toHtml()
        {
                $ret = "<p>-Nombre del Empleado: " . $this->getName() .
                        "<br>-Apellido del Empleado: " . $this->getSurname() .
                        "<br>-Salario del empleado: " . $this->getSalary() . " euros " .
                        "<br>-Telefonos del empleado: </p>";
                $ret .= "<ul>";
                foreach ($this->telephones as $telefono) {
                        $ret .= "<li>$telefono</li>";
                }
                $ret .= "<ul>";

                return $ret;
        }

        //7mo Metodo
        public function calculateSalary()
        {
                return $this->getSalary() - $this->payTaxes();
        }
        public function __toString()
        {
                return "-Nombre del Empleado: " . $this->getName() .
                        "<br>-Apellido del Empleado: " . $this->getSurname() .
                        "<br>-Salario del empleado: " . $this->getSalary() . " euros " .
                        "<br>-Telefonos del empleado: " . $this->listTelephones();
        }
}

