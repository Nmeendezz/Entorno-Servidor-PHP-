<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/OrientadoObjetos/geometry/Polygon.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/OrientadoObjetos/geometry/Paint.php";

class Square extends Polygon implements Paint
{
    public int $noStaticAtr = 0;
    public static int $staticAtr = 0;
    public function __construct($side)
    {
        parent::__construct($side);
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



    public function getNoStaticAtr()
    {
        return $this->noStaticAtr;
    }

    public function setNoStaticAtr($noStaticAtr)
    {
        $this->noStaticAtr = $noStaticAtr;

        return $this;
    }

    public function getStaticAtr()
    {
        return $this->staticAtr;
    }

    public function setStaticAtr($staticAtr)
    {
        $this->staticAtr = $staticAtr;

        return $this;
    }

    public function calculateArea()
    {
        return $this->getSide() ** 2;
    }

    public static function calculateAreaSide($side)
    {
        return $side ** 2;
    }

    public function draw(){
        
    }

    public function __tostring()
    {
        return "<p>Estatico: " . Square::$staticAtr .
            " - No estatico: " . $this->noStaticAtr . "</p>";
    }
}