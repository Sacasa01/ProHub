<?php
require_once("class/BiblioManager.php");

$manager = new BiblioManager();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'] ?? '';
    $author = $_POST['author'] ?? '';
    $year = (int)($_POST['year'] ?? 0);
    $var = $_POST['var'];
    $manager->addPublication($title, $author, $year, $var);
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Biblioteca</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <h1>Gestor de Biblioteca</h1>
    <a href="indexLibros.php"><button>LISTADO DE LIBROS</button></a>
    <a href="indexRevistas.php"><button>LISTADO DE REVISTAS</button></a>
    <h2>Añadir Publicación (Libro o Revista)</h2>
    <form method="POST">

        <label for="title">Título:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="author">Autor:</label>
        <input type="text" id="author" name="author" required><br>

        <label for="year">Año:</label>
        <input type="number" id="year" name="year" min="0" required><br>

        <label for="var">Páginas de libro o Tipo de revista:</label>
        <input type="text" id="var" name="var" required><br>

        <button type="submit">Añadir Publicación</button>
    </form>

</body>

</html>


