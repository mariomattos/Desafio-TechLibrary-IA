<?php
$id_book = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechLibrary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <div class="container shadow p-3 mb-5 bg-body rounded">
        <h2>Alterar Status do Livro</h2>
        <form action="../models/update_status.php" method="post">
            <input type="hidden" name="id" value="<?= $id_book ?>">
            <input type="radio" name="status" value="disponível">Disponível
            <input type="radio" name="status" value="emprestado">Emprestado<br><br>
            <input type="submit" class="btn btn-warning" value="ATUALIZAR STATUS">
        </form>
    </div>
</body>
</html>