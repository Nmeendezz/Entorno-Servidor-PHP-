<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/POONicoM/app/models/Material.php";

class Book extends Material
{
    public function __construct(
        $id,
        $title,
        $available,
        private string $autor
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

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    public function isAvailable()
    {
        if ($this->getAvailable()) {
            return "Esta disponible";
        }
        return "No esta disponible";
    }
    public function __tostring()
    {
        return "- ID del Libro: " . $this->getId() .
            "<br>- Titulo: " . $this->getTitle() .
            "<br>- Disponible: " . $this->isAvailable() .
            "<br>- Autor: " . $this->getAutor();
    }

}