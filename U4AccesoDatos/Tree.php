<?php

class Tree
{
    function __construct(
        private float $price,
        private float $height,
        private string $material,
        private int $id = -1
    ) {
    }
    public function __toString()
    {
        return "$this->id:
            $this->price - 
            $this->height - 
            $this->material";
    }
    /**
     * Inserta en la base de datos el arbol
     * @param Tree $tree arbol a insertar en la bbdd
     * @param mysqli $conn conexion en la bbdd
     * @return int id con el que se ha insertado en la bbdd
     */
    static function insert(Tree $tree, mysqli $conn): int
    {
        $sql = "INSERT INTO trees (price, height, material)
            VALUES (\"$tree->price\", 
            \"$tree->height\", 
            \"$tree->material\")";
        $conn->query($sql);
        $id = $conn->insert_id;
        //$filas = $conn->affected_rows;
        //asigno el id en cuanto lo sé 
        //(cuando lo inserto enla bd)
        $tree->id = $id;
        return $id;
    }

    /**
     * Busca por id un árbol en la BD
     * @param int $id id a buscar en la BD
     * @param mysqli $conn  conexión con la bd
     * @return Tree el árbol de la bd o null si 
     * no existe el id
     */
    static function select($id, $conn): ?Tree
    {
        $sql = "SELECT * from trees where id = $id";
        $row = $conn->query($sql); //devuelve un mysqli_result
        if ($row->num_rows > 0) {
            $arr = $row->fetch_assoc();
            $t = new Tree(
                $arr["price"],
                $arr["height"],
                $arr["material"],
                $arr["id"]
            );
            return $t;
        } else {
            return null;
        }
    }
    static function selectAll($conn): array
    {
        $trees = array();
        $sql = "SELECT * from trees";
        $rows = $conn->query($sql);
        while (($row = $rows->fetch_assoc()) != null) {
            $t = new Tree(
                $row["price"],
                $row["height"],
                $row["material"],
                $row["id"]
            );
            $trees[] = $t;
        }
        return $trees;
    }

    static function delete($id, $conn): bool
    {
        $sql = "DELETE FROM trees WHERE id = $id";
        $conn->query($sql); //aquí se lanza la consulta
        $rows = $conn->affected_rows;   //filas afectadas por la consulta
        if ($rows > 0) {
            return true;
        }
        return false;
    }
}