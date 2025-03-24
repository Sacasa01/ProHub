<?php
require_once("class/BiblioManager.php");

$manager = new BiblioManager();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = (int)($_POST['index']);
    $manager->deleteBook($index);
    echo "<p>Libro eliminado correctamente.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>LISTADO DE LIBROS</title>
</head>

<body>
    <h1> Listado de Biblioteca</h1>
    <a href="index.php"><button>GESTOR DE LIBROS Y REVISTAS</button></a>
    <h2>Listado de Libros</h2>
<?php if (count($manager->getBooks()) == 0): ?>
    <p>No hay libros registrados.</p>
<?php else: ?>
    <ul>
        <?php foreach ($manager->getBooks() as $index => $book): ?>
            <li>
                <?php echo "Título: " . $book->getTitle() . ", Autor: " . $book->getAuthor() . ", Año: " . $book->getYear() . ", Páginas: " . $book->getPages(); ?>
                <form method="POST" class="delete-form">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                    <input type="hidden" name="var" value="<?php echo $book->getPages(); ?>">
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
</html>