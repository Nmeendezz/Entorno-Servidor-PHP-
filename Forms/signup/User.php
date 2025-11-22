<?php

class User{
    public function __construct(
        private string $name,
        private string $password,
        private string $email,
        private int $age,
        private array $curso = []
    ){}

    public function __tostring(){
        return "{$this->name}, 
        {$this->password}, 
        {$this->email}, 
        {$this->age}, " . implode(", ", $this->curso);
    }
}