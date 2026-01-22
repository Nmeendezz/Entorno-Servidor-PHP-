<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/app/core/CoreDB.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/POONicoM/app/models/Book.php";
class BookDAO
{
    public static function create($book)
    {
        $conn = CoreDB::getConnection();
        $sql = "INSERT INTO books (title, available, autor, isbn)
        VALUES (?, ?, ?, ?)";
        $ps = $conn->prepare($sql);

        $title = $book->getTitle();
        $available = $book->getAvailable();
        $autor = $book->getAutor();
        $isbn = $book->getIsbn();

        $ps->bind_param("siss", $title, $available, $autor, $isbn);
        try {
            $ps->execute();
            $id = $ps->insert_id;
            $book->setId($id);
        } catch (Exception $e) {
            $conn->close();
            return false;
        }
        $conn->close();
        return true;
    }

    public static function read($isbn)
    {
        $conn = CoreDB::getConnection();
        $sql = "SELECT * FROM books WHERE isbn = ?";
        $ps = $conn->prepare($sql);
        $ps->bind_param("s", $isbn);
        $ps->execute();

        $res = $ps->get_result();

        $conn->close();
        if ($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            $b =  new Book(
                $row["title"],
                $row["available"],
                $row["autor"],
                $row["isbn"]
            );
            $b->setId($row['id']);
            return $b;
        }
        return null;
    }

    public static function delete($isbn)
    {
        $b = BookDAO::read($isbn);
        if ($b == null) {
            return false;
        }

        $conn = CoreDB::getConnection();

        $sql = "DELETE FROM books WHERE isbn = ?";
        $ps = $conn->prepare($sql);
        $ps->bind_param("s", $isbn);
        $ps->execute();

        $conn->close();
        return true;
    }

    public static function readAll(): array
    {
        $conn = CoreDB::getConnection();
        $books = [];
        $sql = "SELECT * FROM books";
        $rows = $conn->query($sql);
        $conn->close();
        while (($row = $rows->fetch_assoc()) != null) {
            $books[] = new Book(
                $row["title"],
                $row["available"],
                $row["autor"],
                $row["isbn"],
                $row["id"],
            );
        }
        return $books;
    }
}
