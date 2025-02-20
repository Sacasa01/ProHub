<!DOCTYPE html>
<html>
<head>
    <title>Desplazar Ceros al Final</title>
</head>
<body>
    <h1>Desplazar los 0 al Final del Array</h1>

    <?php
    
    $notas = [2, 5, 7, 0, 4, 0, 7, -5, 8, 0];

    
    $noCeros = array(); 
    $ceros = array();   

    
    foreach ($notas as $nota) {
        if ($nota == 0) {
            array_push($ceros, $nota); 
        } else {
            array_push($noCeros, $nota); 
        }
    }

    
    $resultado = array_merge($noCeros, $ceros);


    echo "Array después de mover los ceros al final: <br>";
    echo implode(", ", $resultado);
    ?>

</body>
</html>
