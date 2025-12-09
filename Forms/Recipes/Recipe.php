<?php

class Recipe
{

    public function __construct(
        private string $name,
        private string $email,
        private string $recipe,
        private int $time,
        private string $type,
        private string $gluten,
        private string $color,
    ) {}

    public function __tostring(){
        return "- Nombre del Usuario: {$this->name}, <br> 
        - Correo: {$this->email}, <br>
        - Nombre de la receta: {$this->recipe}, <br>
        - Tiempo: {$this->time} segundos, <br>
        - Tipo: {$this->type}, <br>
        - Gluten: {$this->gluten}, <br>
        - Color: {$this->color}";
    }

}