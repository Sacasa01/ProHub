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
    require_once ('./class/libreria.php');

    echo "<h3> -- Sistema de Gestión de Biblioteca--</h3> <br>";

    $manager = new libreria();

    $manager->crearLibro("El Quijote", "Cervantes", 1605, 3431);
    $manager->crearLibro("El Señor de los Anillos", "Tolkien", 1954, 1200);
    $manager->crearRevista("Toda la verdad", "Juan Lopez", 2022, 205,"Investigacion");
    $manager->crearRevista("National Geographic", "John Malowrik", 2021, 144, "Viajes");

    $manager->lecturaLibros();
    $manager->lecturaRevistas();

    $manager->actualizarLibro(1, "El Quijote (Edición Revisada)", "Cervantes", 1605, 500);
    $manager->actualizarRevista(1, "National Geographic", "John SNOW", 2021, "Viajes");

    $manager->lecturaLibros();
    $manager->lecturaRevistas();

    $manager->eliminarLibro(0);
    $manager->eliminarRevista(0);
    
    $manager->lecturaLibros();
    $manager->lecturaRevistas();
    ?>

</body>
</html>
