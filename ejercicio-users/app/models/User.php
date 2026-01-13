<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/ejercicio-users/app/models/Region.php";
class User
{
    public function __construct(
        private string $name,
        private string $email,
        private string $pass,
        private Region $region,
        private int $id = -1,
    ) {
    }

    public function __toString(): string
    {
        return $this->name . " | " .
            $this->email . " | " .
            $this->region->value . " | " .
            $this->id;
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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

}
