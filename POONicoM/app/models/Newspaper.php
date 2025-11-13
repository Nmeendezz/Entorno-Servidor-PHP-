<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/POONicoM/app/models/Material.php";

final class Newspaper extends Material
{
    public function __construct(
        $id,
        $title,
        $available,
        private string $date
    ) {
        parent::__construct($id, $title, $available);
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

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getAvailable()
    {
        return $this->available;
    }

    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    public function isAvailable()
    {
        if ($this->getAvailable()) {
            return "Está disponible";
        }
        return "No está disponible";
    }
    public function materialType(){
        return "Periódico";
    }

    public function __tostring(){
        $ret = parent::__tostring();
        $ret .="<br>- Fecha: " . $this->getDate();
        return $ret;
    }
}