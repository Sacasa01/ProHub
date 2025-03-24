<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h1></h1>
</body>

</html>
<?php
// Definimos la clase
class Coche
{
    // Propiedades
    public $marca;
    public $color;
    public $modelo;

    // Constructor
    public function __construct($marca, $color, $modelo)
    {
        $this->marca = $marca;
        $this->color = $color;
        $this->modelo = $modelo;
    }

    // Métodos
    public function arrancar()
    {
        echo $this->marca . " Arrancado<br>";
    }
}

// Creación de un objeto
$coche1 = new Coche("Audi", "Rojo", "A4");
echo $coche1->marca . "<br>";
$coche1->arrancar();
// prueba de docker



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