<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/OrientadoObjetos/sports/Sport.php";
final class Rugby extends Sport
{
    private string $teamName;
    public function __construct($teamName, $type, $contact, $numPlayers)
    {
        $this->teamName = $teamName;
        parent::__construct($type, $contact, $numPlayers);
    }

    public function getTeamName()
    {
        return $this->teamName;
    }

    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;

        return $this;
    }
    public function play(): string
    {
        return "Estoy jugando al rugby";
    }

    public function __toString()
    {
        $ret = parent::__toString() . " - Nombre del equipo: " . $this->teamName;
        return $ret;
    }
}