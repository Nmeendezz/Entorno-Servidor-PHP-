<?php

abstract class Polygon
{
    public function __construct(
        protected float $side
    ) {
    }


    public function getSide()
    {
        return $this->side;
    }


    public function setSide($side)
    {
        $this->side = $side;

        return $this;
    }

    public abstract function calculateArea();

}