<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/POONicoM/app/models/Material.php";

final class Book extends Material
{
    public function __construct(
        $title,
        $available,
        private string $autor,
        private string $isbn,
        private int $id = -1
    ) {
        parent::__construct($title, $available);
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

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }
    public function isAvailable()
    {
        if ($this->getAvailable()) {
            return "Está disponible";
        }
        return "No está disponible";
    }

    public function materialType()
    {
        return "Libro";
    }
    public function __tostring()
    {
        $ret = parent::__tostring();
        $ret .= "<br>- Autor del libro: " . $this->getAutor() .
            "<br>- ISBN del libro: " . $this->getIsbn();
        return $ret;
    }


}