<?php

abstract class Gym
{
    public function __construct(
        protected int $code,
        protected string $name,
        protected float $duration
    ) {
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;

        return $this;
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

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    public function __tostring(){
        return "<ul><li>" .
        "- Codigo: " . $this->getCode() . 
        "<br>- Nombre: " . $this->getName() . 
        "<br>- Duracion (mins): " . $this->getDuration() . " minutos";
    }
}