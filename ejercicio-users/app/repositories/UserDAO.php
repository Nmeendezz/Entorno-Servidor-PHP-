<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/ejercicio-users/app/core/CoreDB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/ejercicio-users/app/models/User.php";

class UserDAO
{
    public static function create($user): bool
    {
        $conn = CoreDB::getConnection();
        $sql = "INSERT INTO users (email, name, pass, region)
        VALUES (?, ?, ?, ?)";
        $ps = $conn->prepare($sql);

        $email = $user->getEmail();
        $name = $user->getName();
        $pass = $user->getPass();
        $passHash = password_hash($pass, PASSWORD_DEFAULT);
        $region = $user->getRegion();
        $ps->bind_param("ssss", $email, $name, $passHash, $region);

        try {
            $ps->execute();

            $id = $ps->insert_id;
            $user->setId($id);
        } catch (Exception $e) {
            $conn->close();
            return false;
        }


        $conn->close();
        return true;
    }

    /**
     * Summary of checkPassword
     * @param string $email
     * @param string $pass
     * @return int 1 si coinciden, -1 si el email está pero la contraseña no coincide, -2 si el email no está en la BBDD
     */
    public static function checkPassword($email, $pass)
    {
        $conn = CoreDB::getConnection();
        $sql = "SELECT * FROM users WHERE email = ?";
        $ps = $conn->prepare($sql);
        $ps->bind_param("s", $email);
        $ps->execute();

        $result = $ps->get_result();
        $row = $result->fetch_assoc();
        $ret = 0;
        if($row != null){
            $passBD = $row["pass"];
            if(password_verify($pass, $passBD)){
                $ret = 1;
            } else {
                $ret = -2;
            }
        } else {
            $ret = -1;
        }

        return $ret;
    }
}