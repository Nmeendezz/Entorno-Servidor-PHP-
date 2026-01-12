<?php

class User
{
    public function __construct(
        private string $name,
        private string $pass,
        private int $id = -1,
    ) {
    }

    public function __tostring()
    {
        return "Nombre: $this->name -ID: $this->id";
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

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}