<?php

class CoreDB{
    /**
     * Summary of getConnection
     * @return mysqli Conexion con la BBDD
     * @throws Exception si no se ha podido realizar la conexion
     */
    public static function getConnection(){
        return new mysqli("127.0.0.1", "root", "Sandia4you", "shop");
    }


}