<?php

abstract class Sport
{
    public function __construct(
        protected string $type,
        protected bool $contact,
        private int $numPlayers
    ) {}



    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


    public function getContact()
    {
        return $this->contact;
    }


    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }


    public function getNumPlayers()
    {
        return $this->numPlayers;
    }


    public function setNumPlayers($numPlayers)
    {
        $this->numPlayers = $numPlayers;

        return $this;
    }

    public function addPlayers(int $num){
        $this->numPlayers += $num;
        return $this->numPlayers;
    }

    public abstract function play();

    public function __toString(){
        $ret = "El deporte es: " . $this->getType() . " - Contacto: ";
        if($this->contact){
            $ret .= "Si";
        } else {
            $ret .= "No";
        }
        $ret .= " - Numero de jugadores: " . $this->numPlayers;
        return $ret;
    }
}