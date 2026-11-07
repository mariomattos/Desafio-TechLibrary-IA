<?php
    include "../../database/connection.php";

    $status = $_POST['status'] ?? "";
    $id_book = $_POST['id'];

    $sql = "UPDATE books SET status = '$status' WHERE id = $id_book;";

    if (!mysqli_query($connection, $sql)) {
        echo "Não foi possível atualizar o status do livro.";
        die("<a href='../pages/update_status.html'");
    }
    else {
        header('location: ../pages/register_book.php');
        exit();
    }
?>