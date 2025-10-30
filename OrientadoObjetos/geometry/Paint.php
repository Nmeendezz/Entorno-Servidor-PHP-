<?php

interface Paint{
    //1. Atributos:
    public const PI = 3.1415592;

    public const MAX_SIZE = "200px";
    //2. Constructores (no tiene)

    //3. Getters y Setters (no suele tener)

    //4. Metodos: siempre tienen que ser abstractos(no se pone 'abstract')
    public function draw();
}