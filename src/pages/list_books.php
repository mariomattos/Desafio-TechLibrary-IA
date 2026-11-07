<?php
    include "../../database/connection.php";

    $sql_todos = "SELECT * FROM books;";
    $sql_disponiveis = 'SELECT * FROM books WHERE status = "disponível";';
    $sql_emprestados = 'SELECT * FROM books WHERE status = "emprestado";';

    $result_todos = mysqli_query($connection, $sql_todos);
    $result_disponiveis = mysqli_query($connection, $sql_disponiveis);
    $result_emprestados = mysqli_query($connection, $sql_emprestados);

    if (mysqli_num_rows($result_todos) <= 0 AND mysqli_num_rows($result_disponiveis) <= 0 AND mysqli_num_rows($result_emprestados) <= 0) {
        die("Não há livros registrados!");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechLibrary</title>
</head>
<body>
    <div class="container">
        <div class="form-status">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <input type="radio" name="status" value="todos">Mostrar Todos
                <input type="radio" name="status" value="disponível">Mostrar Disponiveis
                <input type="radio" name="status" value="emprestados">Mostrar Emprestados<br>
                <input type="submit" value="FILTRAR">
            </form>
        </div>
        <br>
        <div class="table">
            <table>
                <tr>
                    <th>ID do Livro</th>
                    <th>Título Do Livro</th>
                    <th>Autor do Livro</th>
                    <th>Ano de Publicação</th>
                    <th>Status do Livro</th>
                    <th>Data do Registro</th>
                    <th>Ações</th>
                </tr>
                    
                <?php
                    $status = $_POST['status'] ?? "";
                    if ($status == "emprestados") {
                        while ($linha = mysqli_fetch_assoc($result_emprestados)) {
                            echo "<tr>"; 
                            echo "<td>" . $linha['id'] . "</td>";
                            echo "<td>" . $linha['title'] . "</td>";
                            echo "<td>" . $linha['author'] . "</td>";
                            echo "<td>" . $linha['publication_year'] . "</td>";
                            echo "<td>" . $linha['status'] . "</td>";
                            echo "<td>" . $linha['registration_date'] . "</td>";
                            echo "<td><a href='update_status.php?id=" . $linha['id'] . "'>Editar Status</td>";
                            echo "<td><a href='../models/delete_book.php?id=" . $linha['id'] . "'>Apagar Livro</td>";
                            echo "</tr>";
                        }
                    }

                    else if ($status == "disponível") {
                        while ($linha = mysqli_fetch_assoc($result_disponiveis)) {
                            echo "<tr>"; 
                            echo "<td>" . $linha['id'] . "</td>";
                            echo "<td>" . $linha['title'] . "</td>";
                            echo "<td>" . $linha['author'] . "</td>";
                            echo "<td>" . $linha['publication_year'] . "</td>";
                            echo "<td>" . $linha['status'] . "</td>";
                            echo "<td>" . $linha['registration_date'] . "</td>";
                            echo "<td><a href='update_status.php?id=" . $linha['id'] . "'>Editar Status</td>";
                            echo "<td><a href='../models/delete_book.php?id=" . $linha['id'] . "'>Apagar Livro</td>";
                            echo "</tr>";
                        }
                    }
                    else {
                        while ($linha = mysqli_fetch_assoc($result_todos)) {
                            echo "<tr>"; 
                            echo "<td>" . $linha['id'] . "</td>";
                            echo "<td>" . $linha['title'] . "</td>";
                            echo "<td>" . $linha['author'] . "</td>";
                            echo "<td>" . $linha['publication_year'] . "</td>";
                            echo "<td>" . $linha['status'] . "</td>";
                            echo "<td>" . $linha['registration_date'] . "</td>";
                            echo "<td><a href='update_status.php?id=" . $linha['id'] . "'>Editar Status</td>";
                            echo "<td><a href='../models/delete_book.php?id=" . $linha['id'] . "'>Apagar Livro</td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>