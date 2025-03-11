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


    //introduicir DATOOSS
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['tipo']) && $_POST['tipo'] === 'libro') {
            $manager->crearLibro($_POST['titulo'], $_POST['autor'], $_POST['anyo'], $_POST['paginas']);
        } elseif (isset($_POST['tipo']) && $_POST['tipo'] === 'revista') {
            $manager->crearRevista($_POST['titulo'], $_POST['autor'], $_POST['anyo'], $_POST['paginas'], $_POST['tematica']);
        }
    }

     //ELIMINAR DATOOSA
     if (isset($_GET['eliminar_libro'])) {
        $manager->eliminarLibro($_GET['eliminar_libro']);
    }
    if (isset($_GET['eliminar_revista'])) {
        $manager->eliminarRevista($_GET['eliminar_revista']);
    }

    //MUESTRA LIBROS Y REVISTASSS
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
        //FORMMMMM
    ?>

<h2>Agregar Libro</h2>
    <form method="post">
        <input type="hidden" name="tipo" value="libro">
        
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>

        <label for="anyo">Año:</label>
        <input type="number" id="anyo" name="anyo" required><br>

        <label for="paginas">Páginas:</label>
        <input type="number" id="paginas" name="paginas" required><br>

        <input type="submit" value="Agregar Libro">
    </form>
    <h2>Agregar Revista</h2>
    <form method="post">
        <input type="hidden" name="tipo" value="revista">

        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>

        <label for="anyo">Año:</label>
        <input type="number" id="anyo" name="anyo" required><br>

        <label for="paginas">Páginas:</label>
        <input type="number" id="paginas" name="paginas" required><br>

        <label for="tematica">Temática:</label>
        <input type="text" id="tematica" name="tematica" required><br>

        <input type="submit" value="Agregar Revista">
    </form>

    <h2>Eliminar Libro</h2>
    <form method="get">
        <label for="eliminar_libro">Índice del Libro:</label>
        <input type="number" id="eliminar_libro" name="eliminar_libro" ><br>
        
        <input type="submit" value="Eliminar Libro">
    </form>

    <h2>Eliminar Revista</h2>
    <form method="get">
        <label for="eliminar_revista">Índice de la Revista:</label>
        <input type="number" id="eliminar_revista" name="eliminar_revista" ><br>

        <input type="submit" value="Eliminar Revista">

            <h2>Refrescar Página</h2>
    <form method="get">
        <input type="submit" value="Refrescar">
    </form>
</body>

</html>