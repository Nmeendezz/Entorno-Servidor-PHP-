<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/U4AccesoDatos/pc/User.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/U4AccesoDatos/pc/CoreDB.php";

class UserDAO
{

    /**
     * Summary of create
     * @param User $user usuario a insertar, tiene la contraseña clara en sus parametros
     * @return int|string
     */
    public static function create($user)
    {
        $conn = CoreDB::getConnection();
        $sql = "INSERT INTO users (name, password) values (?, ?)";
        $ps = $conn->prepare($sql);

        // bind (hay que hashear la password)
        $name = $user->getName();
        $pass = $user->getPass();   // $pass contiene la contraseña clara
        $passHash = password_hash($pass, PASSWORD_DEFAULT); // $passHash tiene la contraseña hasheada
        $ps->bind_param("ss", $name, $passHash);

        // Se ejecuta
        $ps->execute();

        // Obtener el id
        $id = $ps->insert_id;
        $user->setId($id);

        // Cerrar la conexion
        $conn->close();

        return $id;

    }


    /**
     * Verifica si una contraseña corresponde con la otra contraseña de ese nombre en la BBDD
     * @param mixed $name nombre del usuario
     * @param mixed $pass contraseña introducida que sera verificada con la que está guardada en la BBDD
     * @return int 1 si coinciden, -1 si no existe el user, -2 si existe el user pero la contraseña es incorrecta
     */
    public static function verifyPassword($name, $pass)
    {
        $conn = CoreDB::getConnection();
        $sql = "SELECT * FROM users WHERE name = ?";
        $ps = $conn->prepare($sql);
        $ps->bind_param("s", $name);
        $ps->execute();

        $result = $ps->get_result();
        $row = $result->fetch_assoc();
        $ret = 0;
        if ($row != null) {
            $passBD = $row["password"];
            if (password_verify($pass, $passBD)) {
                $ret = 1; // User y contraseña correctas
            } else {
                $ret = -2; // User existe, pero su contraseña no es correcta
            }
        } else {
            $ret = -1; // El select no ha devuelto ningun resultado
        }

        $conn->close();

        return $ret;

    }
}