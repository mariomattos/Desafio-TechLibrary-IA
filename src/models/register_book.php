<?php
    include "../../database/connection.php";

    $book_title = $_POST['book_title'];
    $book_author = $_POST['book_author'];
    $book_publication_year = $_POST['book_publication_year'];

    $sql = "INSERT INTO books (title, author, publication_year) VALUES ('$book_title', '$book_author', '$book_publication_year');";

    if (!mysqli_query($connection, $sql)) {
        echo "Não foi possível fazer o cadastro do livro.<br>";
        die("<a href='../pages/register_book.html'>Tentar Novamente");
    }

    else {
        header('location: ../pages/register_book.php');
        exit();
    }
?>