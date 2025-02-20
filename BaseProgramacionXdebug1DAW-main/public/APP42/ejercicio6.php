<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio: 1</title>
</head>
<body>
    <h1>Repeticiones en el Array</h1>

    <?php
    
 
    $notas = [8, 3, 5, 4, 5, 2, 7, 6, 4, 10];

    foreach ($notas as $nota) {
        if (!is_numeric($nota)) {
            echo "Error: los valores deben ser numericos. <br>";
            exit;
        }
    }

    sort($notas); // ordenamos las notas

    array_splice($notas, 0, 1);
    array_splice($notas, -1, 1); // el "-1" es que empieza a contar desde el final y el "1"es cuantos va a eliminar
    
    $suma = array_sum($notas);
    $cantidad = count($notas);
    $media = $suma / $cantidad;

    echo "Las notas restantes después de eliminar la más baja y la más alta son: " . implode(", ", $notas) . "<br>";
    echo "La media de las notas restantes es: " . number_format($media, 2) . "<br>";



    ?>

</body>
</html>

