<!DOCTYPE html>
<html>
<head>
    <title>Transposición de un Array Bidimensional</title>
</head>
<body>
    <h1>Transposición de un Array Bidimensional</h1>

    <?php
    

    $arrayOriginal = [
        [1, 5, 8, 5],
        [7, 3, 2, 4],
        [1, 6, 2, 4]
    ];

    
    $arrayTranspuesto = [];


    $numFilas = count($arrayOriginal);
    $numColumnas = count($arrayOriginal[0]);


    for ($columna = 0; $columna < $numColumnas; $columna++) {
        for ($fila = 0; $fila < $numFilas; $fila++) {
           
            $arrayTranspuesto[$columna][$fila] = $arrayOriginal[$fila][$columna];
        }
    }


    echo "<strong>Array Original:</strong><br>";
    foreach ($arrayOriginal as $fila) {
        echo "[" . implode(", ", $fila) . "]<br>";
    }

    echo "<br><strong>Array Transpuesto:</strong><br>";
    

    foreach ($arrayTranspuesto as $fila) {
        echo "[" . implode(", ", $fila) . "]<br>";
    }
    ?>

</body>
</html>
