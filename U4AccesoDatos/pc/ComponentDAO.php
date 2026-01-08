<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/U4AccesoDatos/pc/CoreDB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/U4AccesoDatos/pc/Component.php";
class ComponentDAO
{

    public static function create(Component $c, $pc_id = null): int
    {
        $conn = CoreDB::getConnection();
        /* 
        $sql = "INSERT into components (name, brand, model) values (
        \"{$c->getName()}\",
        \"{$c->getBrand()}\",
        \"{$c->getModel()}\"
        )";
        $conn->query($sql);
        //El id se tiene que actualizar en el objeto!
        $id = $conn->insert_id;
        $c->setId($id);
        $conn->close();
        return $id;
        */


        // hago el bind
        $sql = "INSERT INTO components (name, brand, model, pc_id) 
            values (?, ?, ?, ?)";
        
        $ps = $conn->prepare($sql);

        $name = $c->getName();
        $brand = $c->getBrand();
        $model = $c->getModel();

        $ps->bind_param("ssss", $name, $brand, $model, $pc_id);

        // ejecuto la query
        $ret = $ps->execute();


        // obtengo el id con el que se ha insertado
        $id = $conn->insert_id;
        $c->setId($id);

        // return
    }

    public static function read(int $id): ?Component
    {
        $conn = CoreDB::getConnection();
        $sql = "SELECT * FROM components WHERE id = $id";
        $result = $conn->query($sql);
        $conn->close();
        if (($row = $result->fetch_assoc()) != null) {
            return new Component(
                $row["name"],
                $row["brand"],
                $row["model"],
                $row["id"],
            );
        }
        return null;
    }

    public static function update(Component $c): bool
    {
        $conn = CoreDB::getConnection();
        $sql = "UPDATE components SET
                    name = \"{$c->getName()}\",
                    brand = \"{$c->getBrand()}\",
                    model = \"{$c->getModel()}\"
                    WHERE id = {$c->getId()}
                    ";
        $conn->query($sql);
        $num = $conn->affected_rows;
        $conn->close();
        //Si ha actualizado alguna (el numero de filas afectadas es > 0) devuelvo true
        if ($num > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Devuelve el Component eliminado, o null si no existía un componente con ese id
     * @param int $id
     * @param mysqli $conn
     * @return void
     */
    public static function delete(int $id): Component
    {
        $c = ComponentDAO::read($id);
        $conn = CoreDB::getConnection();
        $sql = "DELETE FROM components WHERE id = $id";
        $conn->query($sql);
        $conn->close();
        return $c;
    }

    public static function readAll(mysqli $conn): array
    {
        $conn = CoreDB::getConnection();
        $components = [];
        $sql = "SELECT * FROM components";
        $rows = $conn->query($sql);
        $conn->close();
        while (($row = $rows->fetch_assoc()) != null) {
            $components[] = new Component(
                $row["name"],
                $row["brand"],
                $row["model"],
                $row["id"],
            );
        }
        return $components;
    }

}