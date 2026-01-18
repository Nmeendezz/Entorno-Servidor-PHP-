<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/app/core/CoreDB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/app/models/Book.php";
class BookDAO
{
    public static function create($book)
    {
        $conn = CoreDB::getConnection();
        $sql = "INSERT INTO users (name, surname, dni, email, password)
        VALUES (?, ?, ?, ?, ?)";
        $ps = $conn->prepare($sql);

        $title = $book->getTitle();
        $autor = $book->getAutor();
        $isbn = $book->getIsbn();

        $ps->bind_param("sssss", $name, $surname, $dni, $email, $passwordHash);

        try {
            $ps->execute();
        } catch (Exception $e) {
            $id = $ps->insert_id;
            $book->setId($id);
        }

        $conn->close();
    }

    public static function read($id)
    {
        $conn = CoreDB::getConnection();
        $sql = "SELECT * FROM books WHERE id = ?";
        $ps = $conn->prepare($sql);

        $ps->bind_param("s", $id);
        $ps->execute();

        $res = $ps->get_result();

        $conn->close();
        if ($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            return new Book(
                $id, 
                $row["title"], 
                $row["available"], 
                $row["autor"], 
                $row["isbn"]);
        }
        return null;
    }
    public static function delete($id){

    }
}
