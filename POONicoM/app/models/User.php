<?php

class User
{
    public function __construct(
        private string $name,
        private string $surname,
        private string $dni,
        private string $email,
        private string $password,
        private array $rentals = [],
    ) {
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getRentals()
    {
        return $this->rentals;
    }

    public function setRentals($rentals)
    {
        $this->rentals = $rentals;

        return $this;
    }

    public function getFullName(){
        return $this->getName() . " " . $this->getSurname();
    }
    public function addRental(Rental $rentalToAdd){
        foreach($this->rentals as $rental){
            if($rental === $rentalToAdd){
                return null;
            }
        }
        $this->rentals[] = $rentalToAdd;
    }

    public function findRental(Rental $rentalToFind){
        foreach($this->rentals as $key => $rental){
            if($rental === $rentalToFind){
                return $key;
            }
        }
        return null;
    }

    public function deleteRental(Rental $rentalToDelete){
        $rentalKey = $this->findRental($rentalToDelete);
        if($rentalKey != null){
            unset($this->rentals[$rentalKey]);
            $this->rentals = array_values($this->rentals);
        }
    }

    public function __tostring(){
        $ret = "- Nombre: " . $this->getFullName() . 
        "<br>- DNI: " . $this->getDni() . 
        "<br>- Email: " . $this->getEmail() . 
        "<br>- Contraseña: " . $this->getPassword() . 
        "<br>- Alquileres: <br>";

        $ret .= implode("<br>", $this->getRentals());

        return $ret;
    }
}