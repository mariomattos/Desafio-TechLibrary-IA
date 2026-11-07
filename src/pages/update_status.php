<?php
    $id_book = $_GET['id'];
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
        <div class="option-status">
            <div class="form">
                <h2 class="card-title">Alterar Status do Livro</h2>
                <form action="../models/update_status.php" method="post">
                    <input type="hidden" name="id" value="<?=$id_book?>">
                    <input type="radio" name="status" value="disponível">Dispnível
                    <input type="radio" name="status" value="emprestado">Emprestado<br><br>
                    <input type="submit" value="ATUALIZAR STATUS">
                </form>
            </div>
        </div>
    </div>
</body>
</html>