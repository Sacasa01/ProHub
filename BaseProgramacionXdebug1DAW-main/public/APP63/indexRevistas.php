<?php
require_once("class/BiblioManager.php");

$manager = new BiblioManager();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = (int)($_POST['index']);
    $manager->deleteMagazine($index);
    echo "<p>Revista eliminada correctamente.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTADO DE REVISTAS</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <h1> Listado de Biblioteca</h1>
    <a href="index.php"><button>GESTOR DE LIBROS Y REVISTAS</button></a>
    <h2>Listado de Revistas</h2>
<?php if (count($manager->getMagazines()) == 0): ?>
    <p>No hay revistas registrados.</p>
<?php else: ?>
    <ul>
        <?php foreach ($manager->getMagazines() as $index => $magazine): ?>
            <li>
                <?php echo "Título: " . $magazine->getTitle() . ", Autor: " . $magazine->getAuthor() . ", Año: " . $magazine->getYear() . ", Tipo: " . $magazine->getType(); ?>
                <form method="POST" class="delete-form">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                    <input type="hidden" name="var" value="<?php echo $magazine->getType(); ?>">
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
</html>