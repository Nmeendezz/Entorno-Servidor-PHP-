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
            $id = $ps->insert_id;
            $user->setId($id);
        } catch (Exception $e) {
            $conn->close();
            return false;
        }
        $conn->close();
        return true;
    }

    public static function read($email)
    {
        $conn = CoreDB::getConnection();
        $sql = "SELECT * FROM users WHERE email = ?";
        $ps = $conn->prepare($sql);

        $ps->bind_param("s", $email);

        $ps->execute();

        $res = $ps->get_result();

        if ($row = $res->fetch_assoc()) {
            $u = new User($row['name'], $row['surname'], $row['dni'], $row['email'], $row['password'], $row['rentals']);
            $u->setId($row['id']);
            return $u;
        }
        return null;
    }

    public static function delete($email)
    {
        $u = UserDAO::read($email);
        if($u == null){
            return null;
        }

        $conn = CoreDB::getConnection();


        $sql = "DELETE FROM users WHERE email = ?";
        $ps = $conn->prepare($sql);
        $ps->bind_param("s", $email);
        $ps->execute();

        $conn->close();
        return $u;
    }
}
