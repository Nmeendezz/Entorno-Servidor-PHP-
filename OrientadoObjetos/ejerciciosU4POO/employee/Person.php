<?php

abstract class Person
{
    public function __construct(
        protected string $name,
        protected string $surname,
        protected float $salary = -1,
        protected array $telephones = [],
    ) {
        
    }
    public abstract function getFullName();
}