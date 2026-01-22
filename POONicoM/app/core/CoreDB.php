<?php

class CoreDB{
    public static function getConnection(): mysqli{
        return new mysqli("127.0.0.1", "diurno", "12345", "pooNico", 3307);
    }
}