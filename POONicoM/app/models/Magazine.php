<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/POONicoM/app/models/Material.php";

class Magazine extends Material
{
    public function __construct(
        $id,
        $title,
        $available,
        private int $editionNumber
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

    public function getEditionNumber()
    {
        return $this->editionNumber;
    }

    public function setEditionNumber($editionNumber)
    {
        $this->editionNumber = $editionNumber;

        return $this;
    }

    public function isAvailable()
    {
        if ($this->getAvailable()) {
            return "Esta disponible";
        }
        return "No esta disponible";
    }

    public function __tostring(){
        return "- ID de la Revista: " . $this->getId() .
            "<br>- Titulo: " . $this->getTitle() .
            "<br>- Disponible: " . $this->isAvailable() .
            "<br>- Numero de Edición: " . $this->getEditionNumber();
    }
}