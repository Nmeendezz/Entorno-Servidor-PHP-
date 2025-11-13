<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Simulacro2/clases/Invernadero.php";

class Arbol extends Invernadero
{
    public function __construct(
        $especie,
        $altura,
        private bool $perenne
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

    public function getPerenne()
    {
        return $this->perenne;
    }

    public function esPerenne()
    {
        if ($this->getPerenne()) {
            return "Si es perenne";
        }
        return "No es perenne";
    }

    public function __tostring()
    {
        $ret = parent::__tostring();
        $ret .= $this->esPerenne();
        return $ret;
    }


}