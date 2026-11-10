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
        <h1 class="card-title">Cadastrar Livro</h1>
        <form action="../models/register_book.php" method="post">
            <fieldset>
                <label>Título do Livro:</label>
                <input class="form-control" type="text" name="book_title" placeholder="Título do Livro" aria-label="default input example" required>
                <label>Autor do Livro:</label>
                <input class="form-control" type="text" name="book_author" placeholder="Autor do Livro" aria-label="default input example" required>
                <label>Ano de Publicação:</label>
                <input class="form-control" type="number" name="book_publication_year" max="<?php date('Y') ?>" name="book_publication_year" placeholder="Ano de Publicação" required><br>
                <input class="btn btn-success" type="submit" value="CADASTRAR LIVRO">
            </fieldset>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
<br>
<?php
include "../pages/list_books.php";
?>