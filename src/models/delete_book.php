<?php
    include "../../database/connection.php";

    $id_book = $_GET['id'];

    $sql = "DELETE FROM books WHERE id = $id_book;";

    if(!mysqli_query($connection, $sql)) {
        echo "Não foi possível deletar esse livro.<br>";
        die("<a href='../pages/register_book.php'>Tentar Novamente");
    }
    else {
        header('location: ../pages/register_book.php');
        exit();
    }
?>