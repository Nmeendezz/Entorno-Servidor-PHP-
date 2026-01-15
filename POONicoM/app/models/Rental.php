<?php

final class Rental
{
    public function __construct(
        private Material $material,
        private string $rentalDate,
        private string $rentalReturnDate,
    ) {
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }


    public function getRentalReturnDate()
    {
        return $this->rentalReturnDate;
    }

    public function setRentalReturnDate($rentalReturnDate)
    {
        $this->rentalReturnDate = $rentalReturnDate;

        return $this;
    }

    public function getRentalDate()
    {
        return $this->rentalDate;
    }

    public function setRentalDate($rentalDate)
    {
        $this->rentalDate = $rentalDate;

        return $this;
    }

    public function __tostring(){
        return "<ul><li>" . 
        "- Tipo: " . $this->getMaterial()->materialType() . 
        "<br>" . $this->getMaterial() .
        "<br>- Fecha de prestamo: " . $this->getRentalDate() .
        "<br>- Fecha de devolución: " . $this->getRentalReturnDate() .
        "</li></ul>";   
    }
}