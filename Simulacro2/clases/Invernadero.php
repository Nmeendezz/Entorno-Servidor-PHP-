<?php

abstract class Invernadero
{
    public function __construct(
        protected string $especie,
        protected float $altura,
    ) {
    }

    public function getEspecie()
    {
        return $this->especie;
    }

    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    public function crecer(float $centimetros){
        $this->setAltura($this->getAltura() + $centimetros);
    }

    public function __tostring()
    {
        return $this->getEspecie() . ": altura " . $this->getAltura() . "cm. ";
    }


}