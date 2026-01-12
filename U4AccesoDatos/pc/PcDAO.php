<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/U4AccesoDatos/pc/CoreDB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/U4AccesoDatos/pc/Pc.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/U4AccesoDatos/pc/ComponentDAO.php";

class PcDAO
{
    /**
     * Create / Insert
     * Guarda en la BBDD un ordernador y guarda todos sus componentes
     * @param Pc $pc
     * @return bool 1 si lo inserta, 0 si no lo inserta
     */
    public static function create($pc): bool
    {
        $conn = CoreDB::getConnection();
        $sql = "INSERT INTO pcs (id, owner, brand, price)
            values(?, ?, ?, ?)";
        $ps = $conn->prepare($sql); /* Sentencia preparada */

        /* Operacion de binding: asignar valores a cada ? */

        $id = $pc->getId();
        $owner = $pc->getOwner();
        $brand = $pc->getBrand();
        $price = $pc->getPrice();
        $ps->bind_param("sssd", $id, $owner, $brand, $price);

        try {
            /* Ejecuto la sentencia */
            $ret = $ps->execute(); // Aqui se guarda el ordenador

            /* Guardo los componentes de la BBDD */
            foreach ($pc->getComponents() as $component) {
                ComponentDAO::create($component, $id);
            }
        } catch(mysqli_sql_exception $e){
            // return $e->getMessage(); // Aqui se devolveria el mensaje asociado a la excepcion
            return false;
        }
        $conn->close();

        return $ret;
    }

    /**
     * Read / Select
     * Lee un pc de la BBDD con todos sus componentes
     * @param string $id
     * @return Pc
     */
    public static function read($id): ?Pc
    {
        $conn = CoreDB::getConnection();
        $sql = "SELECT * FROM pcs WHERE id = ?";
        $ps = $conn->prepare($sql);

        $ps->bind_param("s", $id);

        $ps->execute();

        $res = $ps->get_result();

        if ($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            $pc = new Pc($id, $row["owner"], $row["brand"], $row["price"]);

            $pc->setComponents(ComponentDAO::readByPcId($id));
        } else {
            $pc = null;
        }

        $conn->close();
        return $pc;
    }

    public static function update($pc): bool
    {
        return false;
    }

    /**
     * Elimina un pc de la BBDD <strong> junto con todos sus componentes asociados </strong>
     * @param string $id id del pc que quiero eliminar
     * @return Pc|null 
     */
    public static function delete($id): ?Pc
    {
        return null;
    }

    public static function readAll()
    {

    }


    /**
     * Summary of readBetweenPrice
     * @param mixed $min
     * @param mixed $max
     * @return array
     */
    public static function readBetweenPrice($min, $max)
    {

    }
}