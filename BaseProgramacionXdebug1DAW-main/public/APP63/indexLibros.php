<?php
require_once("class/BiblioManager.php");

$manager = new BiblioManager();
$books = $manager->getBooks();
$totalBooks = count($books);
$booksPerPage = 3;
$totalPages = ceil($totalBooks / $booksPerPage);

// Obtener el número de página actual
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max(1, min($page, $totalPages)); // Asegurar que la página esté en el rango válido

// Calcular el índice inicial y final para la paginación
$startIndex = ($page - 1) * $booksPerPage;
$booksToShow = array_slice($books, $startIndex, $booksPerPage);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = (int)($_POST['index'] ?? -1);
    if ($index >= 0) {
        $manager->deleteBook($index);
        //header("Location: ".$_SERVER['PHP_SELF']);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Biblioteca</title>
    <link rel="stylesheet" href="styles/styles.css">
    <body>
    <h1>Listado de Biblioteca</h1>
    <a href="index.php"><button>GESTOR DE LIBROS Y REVISTAS</button></a>
    <h2>Listado de Libros</h2>

    <?php if ($totalBooks == 0): ?>
        <p>No hay libros registrados.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($booksToShow as $index => $book): ?>
                <li>
                    <?php echo "Título: " . $book->getTitle() . ", Autor: " . $book->getAuthor() . ", Año: " . $book->getYear() . ", Páginas: " . $book->getPages(); ?>
                    <form method="POST" class="delete-form">
                        <input type="hidden" name="index" value="<?php echo $startIndex + $index; ?>">
                        <button type="submit">Eliminar</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <!-- Paginación -->
    <div>
        <?php if ($page > 1): ?>
            <a href="?page=1"><<</a>
            <a href="?page=<?php echo $page - 1; ?>"><</a>
        <?php endif; ?>

        <span>Página <?php echo $page; ?> de <?php echo $totalPages; ?></span>

        <?php if ($page < $totalPages): ?>
            <a href="?page=<?php echo $page + 1; ?>">></a>
            <a href="?page=<?php echo $totalPages; ?>">>></a>
        <?php endif; ?>
    </div>
</body>
</html>


