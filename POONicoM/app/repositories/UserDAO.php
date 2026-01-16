<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/app/core/CoreDB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/app/models/User.php";
class UserDAO
{
    public static function create($user)
    {
        $conn = CoreDB::getConnection();
        $sql = "INSERT INTO users (name, surname, dni, email, password)
        VALUES (?, ?, ?, ?, ?)";
        $ps = $conn->prepare($sql);

        $name = $user->getName();
        $surname = $user->getSurname();
        $dni = $user->getDni();
        $email = $user->getEmail();
        $pass = $user->getPassword();
        $passwordHash = password_hash($pass, PASSWORD_DEFAULT);
        $ps->bind_param("sssss", $name, $surname, $dni, $email, $passwordHash);

        try {
            $ps->execute();
        } catch (Exception $e) {
            $id = $ps->insert_id;
            $user->setId($id);
        }

        $conn->close();
    }
}
