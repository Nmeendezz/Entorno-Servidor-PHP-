<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Simulacro2/clases/Invernadero.php";

class Flor extends Invernadero
{
    public function __construct(
        $especie,
        $altura,
        private string $mesFloracion
    ) {
        parent::__construct($especie, $altura);
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
    public function getMesFloracion()
    {
        return $this->mesFloracion;
    }

    public function __tostring()
    {
        $ret = parent::__tostring();
        $ret .= "Su mes de floracion es " . $this->getMesFloracion();
        return $ret;
    }


}