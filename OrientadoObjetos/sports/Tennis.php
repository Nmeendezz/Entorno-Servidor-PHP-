<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/OrientadoObjetos/sports/Sport.php";
class Tennis extends Sport
{
    public function __construct(
        private $court,
        private $rackets,
        $type,
        $contact,
        $numPlayers
    ) {
        parent::__construct($type, $contact, $numPlayers);
    }

    public function play(): string
    {
        return "Estoy jugando al tenis";
    }

    public function addRackets($racket): array
    {
        $this->rackets[] = $racket;
        return $this->rackets;
    }
    
    public function __tostring()
    {
        $ret = parent::__tostring() . " - Pista: " . $this->court . " - Numero de raquetas: ";
        $cont = 0;
        foreach ($this->rackets as $racket) {
            $ret .= $racket . " - ";
        }
        return $ret;

    }
}