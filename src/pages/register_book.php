<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechLibrary</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
    <main class="container-fluid">
        <section>
            <article>
                <h1 class="card-title">Cadastrar Livro</h1>
                <form action="../models/register_book.php" method="post">
                    <fieldset>
                        <label>Título do Livro:</label>
                        <input type="text" name="book_title" placeholder="Título do Livro">
                        <label>Autor do Livro:</label>
                        <input type="text" name="book_author" plaeholder="Autor do Livro" placeholder="Autor do Livro" required>
                        <label>Ano de Publicação:</label>
                        <input type="number" name="book_publication_year" max="<?php date('Y')?>" placeholder="Ano de Publicação"><br>
                        <input type="submit" id="btn" value="CADASTRAR LIVRO">
                    </fieldset>
                </form>
            </article>
        </section> 
    </main>
</body>
</html>

<?php
    include "../pages/list_books.php";
?>