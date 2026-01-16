<?php

abstract class Material
{
    public function __construct(
        protected int $id,
        protected string $title,
        protected bool $available = true
    ) {}

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
    public abstract function isAvailable();

    public abstract function materialType();

    public function __tostring(){
        return "- ID: " . $this->getId() .
            "<br>- Titulo: " . $this->getTitle() .
            "<br>- Disponible: " . $this->isAvailable();
    }
}