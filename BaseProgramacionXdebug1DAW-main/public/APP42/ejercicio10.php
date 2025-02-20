<!DOCTYPE html>
<html>
<head>
    <title>División del Array en Dos Subarrays con la Misma Suma</title>
</head>
<body>
    <h1>División de un Array en Dos Subarrays con la Misma Suma</h1>

    <?php

    $array = [1, 3, 3, 8, 4, 3, 2, 3, 3];
    
 
    $sumaTotal = array_sum($array);
    
    if ($sumaTotal % 2 != 0) {
        echo "La suma total del array no es un número par, no se puede dividir en dos sumas iguales.";
        exit;
    }


    $sumaObjetivo = $sumaTotal / 2;
    

    $sumaAcumulada = 0;

    $puntoCorte = -1;

   
    for ($i = 0; $i < count($array); $i++) {
        $sumaAcumulada += $array[$i];
        
        if ($sumaAcumulada == $sumaObjetivo) {
            $puntoCorte = $i;
            break;
        }
    }


    if ($puntoCorte != -1) {
        $subarray1 = array_slice($array, 0, $puntoCorte + 1);
        $subarray2 = array_slice($array, $puntoCorte + 1);
        
        echo "Array original: <br>";
        echo "[" . implode(", ", $array) . "]<br><br>";
        
        echo "Primer subarray (suma = $sumaObjetivo): <br>";
        echo "[" . implode(", ", $subarray1) . "]<br><br>";
        
        echo "Segundo subarray (suma = $sumaObjetivo): <br>";
        echo "[" . implode(", ", $subarray2) . "]<br>";
    } else {
        echo "No se pudo encontrar un punto de corte donde las sumas sean iguales.";
    }
    ?>
</body>
</html>
