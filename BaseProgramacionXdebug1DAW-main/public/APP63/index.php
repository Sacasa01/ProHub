<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>

<body>
    <h1>Biblioteca</h1>

    <?php
    require_once('./class/libreria.php');

    echo "<h3> -- Sistema de Gestión de Biblioteca--</h3>";

    $manager = new Libreria();

    // No es necesario volver a crear libros y revistas manualmente aquí
    // El método cargarLibrosYRevistas ya se encarga de eso en el constructor de Libreria

    $manager->lecturaLibros();
    $manager->lecturaRevistas();

    // Puedes comentar o eliminar estas líneas si no necesitas actualizar o eliminar elementos
    // $manager->actualizarLibro(1, "El Quijote (Edición Revisada)", "Cervantes", 1605, 500);
    // $manager->actualizarRevista(1, "National Geographic", "John SNOW", 2021, "Viajes");

    // $manager->lecturaLibros();
    // $manager->lecturaRevistas();

    // $manager->eliminarLibro(0);
    // $manager->eliminarRevista(0);

    // $manager->lecturaLibros();
    // $manager->lecturaRevistas();
    ?>

</body>

</html>